import React from 'react';
import Review from './Review';
import CreateReview from './CreateReview';

export default class Reviews extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      lastId: 3,
      reviews: [
        {
          reviewer: 'Regina',
          id: 1,
          moderated: false,
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto aspernatur delectus,' +
            'earum eius eos est facere, ipsum iste maxime necessitatibus officiis optio perferendis praesentium, quasi' +
            'quia quo reiciendis sint.'
        },
        {
          reviewer: 'Vadim',
          id: 2,
          moderated: true,
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto aspernatur delectus,' +
            'earum eius eos est facere.'
        },
        {
          reviewer: 'Andrey',
          id: 3,
          moderated: true,
          text: 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium architecto aspernatur ' +
            'delectus, earum eius eos est facere. Lorem ipsum dolor sit amet, consectetur adipisicing elit. ' +
            'Accusantium architecto aspernatur delectus, earum eius eos est facere.'
        }
      ]
    };
  }

  saveReview(review) {
    let reviews = this.state.reviews;
    review.id = this.state.lastId + 1;
    reviews.push(review);
    this.setState({
      reviews: reviews,
      lastId: this.state.lastId + 1
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
