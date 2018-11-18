import React from 'react';

export default class Review extends React.Component {
  constructor(props) {
    super(props);
  }

  handleDelete() {
    let review = this.props.review;
    $.get('/api/responses/removeReview.json', {id_comment: review.id}, response => {
      if (response.result === 1) {
        this.props.onDeleteReview(review);
      } else {
        alert(response.error_message);
      }
    });
  }

  handleModerate() {
    let review = this.props.review;
    $.get('/api/responses/approveReview.json', {id_comment: review.id}, response => {
      if (response.result === 1) {
        review.moderated = true;
        this.props.onUpdateReview(review);
      } else {
        alert(response.error_message);
      }
    });
  }

  renderModerateButton() {
    if (this.props.review.moderated) {
      return '';
    }
    return <button  className="pink-button" onClick={this.handleModerate.bind(this)}>Moderate</button>;
  }

  render() {
    return <div className="review-page__review">
      <h4>{this.props.review.reviewer}</h4>
      <p>{this.props.review.text}</p>
      <div className="btn">
        {this.renderModerateButton()}
        <button  className="pink-button" onClick={this.handleDelete.bind(this)}>Delete</button>
      </div>
    </div>
  }
}
