
module.exports = {
	entry: './js/app.js',

	output: {
		filename: 'bundle.js',
	}, 
	module: {
		loaders: [
		{
			test: /\.js$/,
			exclude: /node_modules/,
			loaders: ['react-hot-loader/webpack', 'babel-loader'],
		},
		{
			test: /\.scss$/,
       	    loaders: ['style', 'css', 'sass'],
       	},
		{
			test: /\.css$/,
			loader: 'style-loader!css-loader',
		}]
	}
};