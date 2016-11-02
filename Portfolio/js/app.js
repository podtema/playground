//React Stuff
import React from 'react';
import ReactDOM from 'react-dom';

//CSS
import '../styles/normalize.css';
import '../styles/skeleton.css';
import '../styles/styles.css';


var copyrightYear = new Date().getFullYear();


// to be replaced by Nav module (with link previews), Content module with autoupdated skills, autoupdated books module.

function Application(props) {
	return (
<div>
	<div className="row">
		<nav>
			<ul>
				<li><a href="https://github.com/rosnovsky" target="_blank">github</a></li>
				<li><a href="https://behance.net/podtema" target="_blank">bēhance</a></li>
				<li><a href="https://linkedin.com/in/rosnovsky" target="_blank">linkedin</a></li>
				<li><a href="https://facebook.com/rosnovsky" target="_blank">facebook</a></li>
				<li><a href="https://twitter.com/rosnovsky" target="_blank">twitter</a></li>
			</ul>
		</nav>
	</div>

	<div className="row title">
		<h1>{props.name}</h1>
		<h3>{props.position}</h3>
	</div>

	<div className="row content">
		<div className="six columns">
			<h4>Hi there!</h4>
			<p>Thanks for dropping by. I design and develop easy-to-use and clear user interfaces for web sites and applications, both web and iOS/Android. I fully embrace mobile-first, device-specific designs, latest standards and best practices in producing and developing interfaces and websites. </p>
			<p><a href="artem-rosnovskiy-front-end.pdf">Download my updated resumé</a> and drop me a line at <a href="mailto:inbox@rosnovsky.us" className="email">inbox@rosnovsky.us</a>. I’m <span className="available">available</span> for hire.</p>
		</div>
		
		<div className="six columns">
			<h4>Skills &amp; Expertise</h4>
			<p><strong>Web dev</strong>: HTML5, CSS3, Javascript, jQuery, Gulp, Webpack, npm, Sass, Bootstrap, git, Ubuntu, Apache, nginx, PHP, MySQL</p>
			<p><strong>Design and Media</strong>: Adobe Photoshop, Illustrator, AfterEffectr, Premier Pro, Dreamweaver, Flash (including ActionScript), Audition, Sketch by Bohemian</p>
			<p><strong>In Progress</strong>: React , Node.js, Angular 2, Grunt, Ruby on Rails, Swift</p>
		</div>
	</div>

	<div className="row">
		<div className="twelve columns">
			<h4>Current Reading</h4>
		</div>
	</div>

	<div className="row books">
		<div className="three columns book">
			<a href="http://amzn.to/2epRd6H" target="_blank"><img src="images/22814239.jpg" alt="You don&#39;t know JS"/>
			<p>You Don&#39;t Know JS: this &amp; Object Prototypes</p></a>
		</div>
		
		<div className="three columns book">
			<a href="http://amzn.to/2eSLIxI" target="_blank"><img src="images/20830437.jpg" alt="CSS Secrets"/>
			<p>CSS Secrets: Better Solutions to Everyday Web Design Problems</p></a>
		</div>
		<div className="three columns book">
			<a href="http://amzn.to/2eSLN4u" target="_blank"><img src="images/17204679.jpg" alt="Man&#39;s Search for Meaning"/>
			<p>Man&#39;s Search for Meaning</p></a>
		</div>
		<div className="three columns book">
			<a href="http://amzn.to/2flyqOx" target="_blank"><img src="images/27426984.jpg" alt="Disrupted"/>
			<p>Disrupted: My Misadventure in the Start-Up Bubble</p></a>
		</div>
	</div>

	<div className="row footer">
		<p>© {copyrightYear}</p>
	</div> 
</div>);
}

Application.propTypes = {
	name: React.PropTypes.string.isRequired,
	position: React.PropTypes.string.isRequired,
};

Application.defaultProps = {
	name: "Artem Rosnovskiy",
	position: "front end ux/ui dev",
}

ReactDOM.render(<Application />, document.getElementById('react-app'));