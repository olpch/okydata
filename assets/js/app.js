App = Ember.Application.create();

App.Router.map(function() {
  this.route("items", { path: "/items" });
  this.route("favorites", { path: "/favs" });
});

App.ApplicationController = Em.Controller.extend();
    App.ApplicationView = Em.View.extend({
        templateName: 'application'
    });