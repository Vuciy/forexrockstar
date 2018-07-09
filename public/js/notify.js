function notify(message, type = 'success', showCloseButton = true) {
  Messenger.options = {
    extraClasses: 'messenger-fixed messenger-on-top messenger-on-center',
    theme: 'flat'
}

Messenger().post({
    message: message,
    type: type,
    showCloseButton: showCloseButton
});
}
