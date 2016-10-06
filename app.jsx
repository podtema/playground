var copyrightYear = new Date().getFullYear();

function Application(props) {
	return (
		<div className="app-container">
			<div className="row">
				<div className="col-md-3"></div>
				<div className="col-md-6">
					<h1 className="text-center">{props.title}</h1>
					<h1 className="text-center"><small>{props.subtitle}</small></h1>
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
					<p className="text-center"><small>Copyright © 2011-{copyrightYear} Artem Rosnovskiy. All rights reserved.</small></p>
				</div>
				<div className="col-md-3"></div>
			</div>
		</div>
		);

}

Application.propTypes = {
	title: React.PropTypes.string,
	subtitle: React.PropTypes.string,
};

Application.defaultProps = {
	title: "Path to Superbowl LI",
	subtitle: "Go Seahawks!",
}


ReactDOM.render(<Application />, document.getElementById('react-app'));