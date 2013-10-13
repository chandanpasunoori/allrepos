// Load required modules.
var port = process.env.PORT,
  http = require('http'),
  express = require('express'),
  middleware = require('./middleware'),
  routes = require('./routes');

var app = express();

// Register middleware.
middleware.config(app);

// Register routes.
routes.register(app);

// Start server
var server = app.listen(port, function(){
  console.log("App is listening on port " + port);
});

// Load shotgun modules and instantiate any shells.
var shotgun = require('shotgun'),
    shotgunClient = require('shotgun-client'),
    resumeShell = new shotgun.Shell({
        cmdsDir: 'resumeCmds',
        namespace: 'resume',
        defaultCmds: {
            exit: false
        }
    });

// Attach shotgun-client to server instance and associate shell instances.
shotgunClient.attach(server, resumeShell);
