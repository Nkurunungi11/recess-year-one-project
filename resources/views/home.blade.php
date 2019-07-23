@extends('header')

@section('content') 

 <center> <h2 id="headline"><b> Home </b></h2> </center> 

<section class="section">
	<div class="container is-centered page">
		<div class="content">
			<h2>
				<a href="https://blog.gitea.io/2016/12/welcome-to-gitea/">
					Welcome to United Front for Transformation (UFT) 
				</a>
			</h2>
			<p>
				<i>Thu Dec 8, 2016</i>
				by
				<b>
					<a href="#">
						strk
					</a>
				</b>
			</p>

			<p>United Front for Transformation (UFT) is a new political party, which was recently formed and registered in Uganda. The party is currently using agents to enroll new members across the country. The party is currently using agents to enroll new members across the country.</p>

	<p>Whoever is enrolled by an agent, becomes a member of the party. An enrolled
	member may be upgraded to an agent by the system’s administrator via a web interface. An
	enrolled member may introduce new members to the party. An enrolled
	member may be upgraded to an agent by the system’s administrator via a web interface. An
	enrolled member may introduce new members to the party.</p>
	<p>Agent's benefits:</p>

	<blockquote>
	<p> Agents are paid a sum of money per month based on
	available funds. The main source of funds is well-wishers and this money is declared and
	registered into the web interface by the administrator </p>
	</blockquote>

<p>UFT is located at plot 53638 Kampala street Uganda . Anyone can become a member of the party. Anyone can become a member of the party. Anyone can become a member of the party. Anyone can become a member of the party.</p>

 
<h4><b>We invite everyone to join the effort and help continue building the next generation of demacracy.</b></h4>

			<div id="discourse-comments"></div>

<script type="text/javascript">
DiscourseEmbed = {
    discourseUrl: "#",
    discourseEmbedUrl: "#"
};

(function() {
    var d = document.createElement("script"); d.type = "text/javascript"; d.async = true;
    d.src = DiscourseEmbed.discourseUrl + "javascripts/embed.js";
    (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(d);
})();
</script>

		</div>
	</div>
</section>

		<footer class="footer">
			<div class="container">
				<div class="content has-text-centered">
					<p>
						Copyright &copy; 2019 <a href="home">The UFT management</a>. All rights reserved. With <i class="fa fa-heart" aria-hidden="true"></i> and <a href="#">Determination</a>.
					</p>
					<p>
						 Headed by <a href="#">Groupx</a>, <a href="#">Year 1</a>, <a href="#">Makerere</a>, and all of our supporters .
					</p>
					<p>
						
						<a class="nav-link" href="http://localhost:8000" hreflang="en-us"></a>
						
					</p>
				</div>
			</div>
		</footer>

		<script>
            document.addEventListener('DOMContentLoaded', function () {

                
                var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

                
                if ($navbarBurgers.length > 0) {

                    
                    $navbarBurgers.forEach(function ($el) {
                        $el.addEventListener('click', function () {

                            
                            var target = $el.dataset.target;
                            var $target = document.getElementById(target);

                            
                            $el.classList.toggle('is-active');
                            $target.classList.toggle('is-active');


                            document.getElementById('navbar-background').classList.toggle('is-active');


                        });
                    });
                }

            });
		</script>
 @endsection

