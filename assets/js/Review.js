import React from 'react';
import axios from 'axios';

export default class Review extends React.Component {
  constructor(props) {
    super(props);
  }

  handleDelete() {
    let review = this.props.review;
    axios.delete('/?page=api/reviews&id=' + review.id).then(response => {
      if (response.data.result === 1) {
        this.props.onDeleteReview(review);
      } else {
        alert(response.data.error_message);
      }
    });
  }

  handleModerate() {
    let review = this.props.review;
    axios.post('/?page=api/reviews&id=' + review.id).then(response => {
      if (response.data.result === 1) {
        review.state = 1;
        this.props.onUpdateReview(review);
      } else {
        alert(response.data.error_message);
      }
    });
  }

  renderModerateButton() {
    if (this.props.review.state == 1) {
      return '';
    }
    return <button  className="pink-button" onClick={this.handleModerate.bind(this)}>Moderate</button>;
  }

  render() {
    return <div className="review-page__review">
      <h4>{this.props.review.name}</h4>
      <p>{this.props.review.review}</p>
      <div className="btn">
        {this.renderModerateButton()}
        <button  className="pink-button" onClick={this.handleDelete.bind(this)}>Delete</button>
      </div>
    </div>
  }
}
