const path = require('path');

module.exports = {
  entry: {
    public: path.resolve(__dirname, './resources/js/public.js') ,
    private: path.resolve(__dirname, './resources/js/private.js')
  },
  mode: 'development',
  output: {
    path: path.resolve(__dirname, './public/'),
    filename: 'js/[name].js'
  },
  module:{
    rules: [
      {
        test: /\.js$/,
        use: 'babel-loader',
        exclude: /node_modules/
      },
      {
        test: /\.scss$/,
        use: [
          'style-loader',
          'css-loader',
          'sass-loader'
        ],
        exclude: /node_modules/
      }
    ]
  },
  devtool: 'inline-source-map'
};
