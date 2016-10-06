function Application() {
	return (
		<div className="app-container">
			
			<div className="row">
				<div className="col-md-3"></div>
				<div className="col-md-6">
					<h1 className="text-center">App Heading and Title</h1>
					<h1 className="text-center"><small>and subtitle</small></h1>
				</div>
				<div className="col-md-3"></div>
			</div>
			
			<div className="row content">
				<div className="col-md-3"></div>
				<div className="col-md-6">
					<h3 className="text-center">App content</h3>
					<h3 className="text-center"><small>and more content</small></h3>
				</div>
				<div className="col-md-3"></div>
			</div>

			
			<div className="row">
				<div className="col-md-3"></div>
				<div className="col-md-6">
					<p className="text-center lead">App footer</p>
					<p className="text-center"><small>© 2016</small></p>
				</div>
				<div className="col-md-3"></div>
			</div>
		</div>
		);

}

ReactDOM.render(<Application />, document.getElementById('react-app'));