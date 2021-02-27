function selectFormType() {
  const radioButtons = document.querySelectorAll('input[name="formType"]');

  for (radioBtn of radioButtons) {
    if (radioBtn.checked && radioBtn.id === 'teamAugmentation') {
      document.getElementById('formOne').classList.add('show');
      document.getElementById('formTwo').classList.remove('show');
      document.getElementById('formOne').classList.remove('hide');
      break;
    } else {
      document.getElementById('formTwo').classList.add('show');
      document.getElementById('formOne').classList.remove('show');
      document.getElementById('formOne').classList.add('hide');
    }
  }
}
