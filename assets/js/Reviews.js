import React from 'react';
import axios from 'axios';
import Review from './Review';
import CreateReview from './CreateReview';

export default class Reviews extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      reviews: []
    };
    this.loadReviews();
  }

  loadReviews() {
    axios.get('/?page=api/reviews').then(response => {
      this.setState({
        reviews: response.data
      })
    })
  }

  saveReview(review) {
    // Браузер не позволяет делать post-запросы к статическим файлам.
    axios.put('/?page=api/reviews', review).then(response => {
      if (response.data.result === true) {
        alert(response.data.user_message);
        let reviews = this.state.reviews;
        reviews.push(response.data.review);
        this.setState({
          reviews: reviews
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
            key={review.id}
            review={review}
            onDeleteReview={this.deleteReview.bind(this)}
            onUpdateReview={this.updateReview.bind(this)}/>
        )}
      </div>
      <CreateReview onSaveReview={this.saveReview.bind(this)}/>
    </div>
  }
}
