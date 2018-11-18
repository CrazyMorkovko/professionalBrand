import React from 'react';
import Review from './Review';
import CreateReview from './CreateReview';

export default class Reviews extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      lastId: 3,
      reviews: []
    };
    this.loadReviews();
  }

  loadReviews() {
    $.get('/api/responses/reviewList.json', response => {
      this.setState({
        reviews: response
      })
    })
  }

  saveReview(review) {
    // Браузер не позволяет делать post-запросы к статическим файлам.
    $.get('/api/responses/addReview.json', review, response => {
      if (response.result === 1) {
        alert(response.userMessage);
        let reviews = this.state.reviews;
        review.id = this.state.lastId + 1;
        reviews.push(review);
        this.setState({
          reviews: reviews,
          lastId: this.state.lastId + 1
        });
      }
    });
  }

  updateReview(review) {
    let reviews = this.state.reviews;
    reviews = reviews.map(r => {
      if (r.id === review.id) {
        r = review;
        return r;
      }
      return r;
    });
    this.setState({reviews: reviews});
  }

  deleteReview(review) {
    let reviews = this.state.reviews;
    let reviewIndex = reviews.findIndex(r => r.id === review.id);
    if (reviewIndex !== -1) {
      reviews.splice(reviewIndex, 1);
    }
    this.setState({reviews: reviews});
  }

  render() {
    return <div className="container">
      <div className="review-page">
        {this.state.reviews.map(review =>
          <Review
            key={review.reviewer}
            review={review}
            onDeleteReview={this.deleteReview.bind(this)}
            onUpdateReview={this.updateReview.bind(this)}/>
        )}
      </div>
      <CreateReview onSaveReview={this.saveReview.bind(this)}/>
    </div>
  }
}
