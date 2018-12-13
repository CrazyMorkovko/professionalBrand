import React from 'react';

export default class CreateReview extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      form: {
        name: '',
        review: ''
      },
      errors: {
        name: '',
        review: '',
        submit: ''
      }
    }
  }

  handleNameInput(evt) {
    let form = this.state.form;
    form.name = evt.target.value;
    this.setState({form: form});
  }

  handleReviewInput(evt) {
    let form = this.state.form;
    form.review = evt.target.value;
    this.setState({form: form});
  }

  validateName() {
    let errors = this.state.errors;
    if (!(/^[A-Za-zА-Яа-яЁё]+$/.test(this.state.form.name))) {
      errors.name = 'Имя должно содержать только буквы!';
    } else {
      errors.name = '';
    }
    this.setState({errors: errors});
    return !errors.name;
  }

  validateReview() {
    let errors = this.state.errors;
    if (!(/.+/.test(this.state.form.review))) {
      errors.review = 'Введите текст!';
    } else {
      errors.review = '';
    }
    this.setState({errors: errors});
    return !errors.review;
  }

  handleSubmit(evt) {
    evt.preventDefault();
    let isValideName = this.validateName();
    let isValideReview = this.validateReview();
    if (!isValideName || !isValideReview) {
      return;
    }
    this.props.onSaveReview(this.state.form);
    let form = {
      name: '',
      review: ''
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
                 value={this.state.form.name}
                 placeholder="Name"
                 onChange={this.handleNameInput.bind(this)}/>
          {this.renderError('name')}
        </div>
        <div className="form-input">
          <textarea value={this.state.form.review} placeholder="Review text" onChange={this.handleReviewInput.bind(this)}/>
          {this.renderError('review')}
        </div>
        <button className="pink-button">Add</button>
      </form>
    </div>
  }
}
