var HtmlWebpackPlugin = require("html-webpack-plugin");

var webpackConfig = {
	entry: "./app.jsx",
	output: {
		path: "build",
		filename: "bundle.jsx"
	},
	module: {
		loaders: [
			{
				loader: "babel-loader",
				test: /\.js$/
			}
		]
	},
	plugins: [
		new HtmlWebpackPlugin({
			template: "src/index.ejs"
		})
	]
};

module.exports = webpackConfig;