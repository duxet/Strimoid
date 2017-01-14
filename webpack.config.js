const path = require('path')
const webpack = require('webpack')

module.exports = {
  context: path.resolve(__dirname, './resources/assets/js'),
  entry: {
    app: './lara.js',
    comments: './modules/comments.js',
    contents: './modules/contents.js',
    entries: './modules/entries.js',
    folders: './modules/folders.js',
    groups: './modules/groups.js',
    groups: './modules/notifications.js',
    polls: './modules/polls.js',
    users: './modules/users.js',
    votes: './modules/votes.js',
  },
  output: {
    path: path.resolve(__dirname, './public/assets/js/webpack'),
    filename: '[name].bundle.js',
  },
}
