window.MobikulNativeLoader = {
  show: function(id) {
    var loader = document.getElementById(id || 'mobikul-native-loader');
    if (loader) {
      loader.style.display = 'flex';
      loader.setAttribute('aria-busy', 'true');
    }
  },
  hide: function(id) {
    var loader = document.getElementById(id || 'mobikul-native-loader');
    if (loader) {
      loader.style.display = 'none';
      loader.setAttribute('aria-busy', 'false');
    }
  }
};
