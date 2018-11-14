import React from 'react';

export default class CreateReview extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      form: {
        reviewer: '',
        text: ''
      }
    }
  }

  handleReviewerInput(evt) {
    let form = this.state.form;
    form.reviewer = evt.target.value;
    this.setState({form: form});
  }

  handleTextInput(evt) {
    let form = this.state.form;
    form.text = evt.target.value;
    this.setState({form: form});
  }

  handleSubmit(evt) {
    evt.preventDefault();
    this.props.onSaveReview(this.state.form);
    let form = {
      reviewer: '',
      text: ''
    };
    this.setState({form: form});
  }

  render() {
    return <div className="create-review">
      <form onSubmit={this.handleSubmit.bind(this)}>
        <div className="form-input">
          <input type="text"
                 value={this.state.form.reviewer}
                 placeholder="Name"
                 onChange={this.handleReviewerInput.bind(this)}/>
        </div>
        <div className="form-input">
          <textarea value={this.state.form.text} placeholder="Review text" onChange={this.handleTextInput.bind(this)}/>
        </div>
        <button className="pink-button">Add</button>
      </form>
    </div>
  }
}
