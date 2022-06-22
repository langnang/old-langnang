function Router(options) {
    this.mode = "hash";
    this.routes = {};
    this.currentUrl = '';
    this.prefix = "/utils";
    this.suffix = "";

    if (options) {
        this.mode = options.mode ? options.mode : this.mode;
    }
}
Router.prototype.insert = function (path, callback) {
    this.routes[path] = callback || function () {};
};
Router.prototype.reload = function () {
    // console.log(location.pathname.slice(0));
    this.currentUrl = location.hash.slice(1) || '/';
    console.log(this.currentUrl);

    // console.log(this.routers.indexOf(this.currentUrl));
    this.routes[this.currentUrl]();
};
Router.prototype.init = function () {
    window.addEventListener('load', this.reload.bind(this), false);
    window.addEventListener('hashchange', this.reload.bind(this), false);
}