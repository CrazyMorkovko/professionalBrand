import React from 'react';

export default class CreateReview extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      form: {
        reviewer: '',
        text: ''
      },
      errors: {
        reviewer: '',
        text: '',
        submit: ''
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

  validateReviewer() {
    let errors = this.state.errors;
    if (!(/^[A-Za-zА-Яа-яЁё]+$/.test(this.state.form.reviewer))) {
      errors.reviewer = 'Имя должно содержать только буквы!';
    } else {
      errors.reviewer = '';
    }
    this.setState({errors: errors});
    return !errors.reviewer;
  }

  validateText() {
    let errors = this.state.errors;
    if (!(/.+/.test(this.state.form.text))) {
      errors.text = 'Введите текст!';
    } else {
      errors.text = '';
    }
    this.setState({errors: errors});
    return !errors.text;
  }

  handleSubmit(evt) {
    evt.preventDefault();
    let isValideReviewer = this.validateReviewer();
    let isValideText = this.validateText();
    if (!isValideReviewer || !isValideText) {
      return;
    }
    this.props.onSaveReview(this.state.form);
    let form = {
      reviewer: '',
      text: ''
    };
    this.setState({form: form});
  }

  renderError(field) {
    if (this.state.errors[field]) {
      return <div className='text-error'>{this.state.errors[field]}</div>;
    }
    return '';
  }

  render() {
    return <div className="create-review">
      <form onSubmit={this.handleSubmit.bind(this)}>
        <div className="form-input">
          <input type="text"
                 value={this.state.form.reviewer}
                 placeholder="Name"
                 onChange={this.handleReviewerInput.bind(this)}/>
          {this.renderError('reviewer')}
        </div>
        <div className="form-input">
          <textarea value={this.state.form.text} placeholder="Review text" onChange={this.handleTextInput.bind(this)}/>
          {this.renderError('text')}
        </div>
        <button className="pink-button">Add</button>
      </form>
    </div>
  }
}
