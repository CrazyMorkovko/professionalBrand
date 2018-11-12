import React from 'react';

export default class Review extends React.Component {
  constructor(props) {
    super(props);
  }

  handleDelete() {
    this.props.onDeleteReview(this.props.review);
  }

  handleModerate() {
    let review = this.props.review;
    review.moderated = true;
    this.props.onUpdateReview(review);
  }

  renderModerateButton() {
    if (this.props.review.moderated) {
      return '';
    }
    return <button onClick={this.handleModerate.bind(this)}>Moderate</button>;
  }

  render() {
    return <div className="review">
      <h4>{this.props.review.reviewer}</h4>
      <p>{this.props.review.text}</p>
      <div className="btn">
        {this.renderModerateButton()}
        <button onClick={this.handleDelete.bind(this)}>Delete</button>
      </div>
    </div>
  }
}
