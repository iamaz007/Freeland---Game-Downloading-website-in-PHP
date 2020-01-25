	<!-- footer -->
	<footer>
		<div class="container">
			<div class="widget row">
				<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
					<h4 class="title">About Freeland</h4>
					<p> <br /> <br /></p>
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">	
				<ul class="list-inline">
					<li><a href="#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow Freeland on Instagram"><i class="fa fa-instagram"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow Freeland on Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow Freeland on Youtube"><i class="fa fa-youtube"></i></a></li>
					<li><a href="#" class="btn btn-circle btn-social-icon" data-toggle="tooltip" title="Follow Freeland on Steam"><i class="fa fa-steam"></i></a></li>
				</ul>
				&copy; 2018 Freeland. All rights reserved.
			</div>
		</div>
	</footer>	
	
	<!-- /.footer -->
</div>	
	 
	
	<!-- Javascript -->
	<!-- Begin Inspectlet Asynchronous Code -->
<script type="text/javascript">
(function() {
window.__insp = window.__insp || [];
__insp.push(['wid', 443533681]);
var ldinsp = function(){
if(typeof window.__inspld != "undefined") return; window.__inspld = 1; var insp = document.createElement('script'); insp.type = 'text/javascript'; insp.async = true; insp.id = "inspsync"; insp.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://cdn.inspectlet.com/inspectlet.js?wid=443533681&r=' + Math.floor(new Date().getTime()/3600000); var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(insp, x); };
setTimeout(ldinsp, 0);
})();
</script>
<!-- End Inspectlet Asynchronous Code -->
	<script  src="plugins/jquery/jquery-1.11.1.min.js"></script>
	<script  src="plugins/bootstrap/js/bootstrap.min.js"></script>
	<script  src="plugins/core.min.js"></script>
	<script  src="plugins/owl-carousel/owl.carousel.min.js"></script>
	<script  src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script  src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script  src="https://code.jquery.com/jquery-2.2.4.min.js" ></script>
	<script >
	(function($) {
	"use strict";
		var owl = $(".owl-carousel");
			 
		owl.owlCarousel({
			items : 4, //4 items above 1000px browser width
			itemsDesktop : [1000,3], //3 items between 1000px and 0
			itemsTablet: [600,1], //1 items between 600 and 0
			itemsMobile : false // itemsMobile disabled - inherit from itemsTablet option
		});
			 
		$(".next").click(function(){
			owl.trigger('owl.next');
			return false;
		})
		$(".prev").click(function(){
			owl.trigger('owl.prev');
			return false;
		})
	})(jQuery);
	</script>
	<!--disable keys-->
		<script async="">
			window.oncontextmenu = function () {
				
						return false;
					}
					$(document).keydown(function (event) {
						if (event.keyCode == 123) {
							
							return false;
						}
						else if ((event.ctrlKey && event.shiftKey && event.keyCode == 73) || (event.ctrlKey && event.shiftKey && event.keyCode == 74)) {
							return false;
						}
					});
		</script>
		
		<script async="" type='text/javascript' >
			var isCtrl = false;
			document.onkeyup=function(e)
			{
			if(e.which == 17)
			isCtrl=false;
			}
			document.onkeydown=function(e)
			{
			if(e.which == 17)
			isCtrl=true;
			if((e.which == 85) || (e.which == 67) &amp;&amp; isCtrl == true)
			{
			// alert(&#8216;Keyboard shortcuts are cool!&#8217;);
			return false;
			}
			}
			var isNS = (navigator.appName == "Netscape") ? 1 : 0;
			if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
			function mischandler(){
			return false;
			}
			function mousehandler(e){
			var myevent = (isNS) ? e : event;
			var eventbutton = (isNS) ? myevent.which : myevent.button;
			if((eventbutton==2)||(eventbutton==3)) return false;
			}
			document.oncontextmenu = mischandler;
			document.onmousedown = mousehandler;
			document.onmouseup = mousehandler;
		</script>

<script async="">
      function disableClick(){
        document.onclick=function(event){
          if (event.button == 2) 
		  {
            
            return false;
			
          }
        }
      }
    </script>
<!-- disable ctrl+u-->	
    <script async="">
	jQuery(document).ready(function($){
    $(document).keydown(function(event) { 
        var pressedKey = String.fromCharCode(event.keyCode).toLowerCase();
        
			if (event.ctrlKey && (pressedKey == "c" || pressedKey == "u" || pressedKey == "v")) 
				{
					
					//disable key press porcessing
					return false; 
					
				}
	
    });
});
    </script>
	
    <script async="">
	$(document).bind('keydown', function(e) {
  if(e.ctrlKey && (e.which == 83)) {
    e.preventDefault();
    return false;
  }
});
    </script>
	
	<!--ad bloker-->
	<script type="text/javascript"  charset="utf-8" >
// Place this code snippet near the footer of your page before the close of the /body tag
// LEGAL NOTICE: The content of this website and all associated program code are protected under the Digital Millennium Copyright Act. Intentionally circumventing this code may constitute a violation of the DMCA.
                            
eval(function(p,a,c,k,e,d){e=function(c){return(c<a?'':e(parseInt(c/a)))+((c=c%a)>35?String.fromCharCode(c+29):c.toString(36))};if(!''.replace(/^/,String)){while(c--){d[e(c)]=k[c]||e(c)}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}(';q P=\'\',29=\'21\';1P(q i=0;i<12;i++)P+=29.11(D.L(D.O()*29.H));q 2S=3,2J=76,2I=6c,2U=28,2g=F(e){q i=!1,o=F(){z(k.1h){k.2X(\'2W\',t);G.2X(\'1T\',t)}S{k.2Y(\'2V\',t);G.2Y(\'26\',t)}},t=F(){z(!i&&(k.1h||68.2A===\'1T\'||k.33===\'34\')){i=!0;o();e()}};z(k.33===\'34\'){e()}S z(k.1h){k.1h(\'2W\',t);G.1h(\'1T\',t)}S{k.35(\'2V\',t);G.35(\'26\',t);q n=!1;36{n=G.61==5Z&&k.1X}2t(r){};z(n&&n.2u){(F a(){z(i)J;36{n.2u(\'14\')}2t(t){J 6i(a,50)};i=!0;o();e()})()}}};G[\'\'+P+\'\']=(F(){q e={e$:\'21+/=\',5E:F(t){q a=\'\',d,n,i,c,s,l,o,r=0;t=e.t$(t);1f(r<t.H){d=t.17(r++);n=t.17(r++);i=t.17(r++);c=d>>2;s=(d&3)<<4|n>>4;l=(n&15)<<2|i>>6;o=i&63;z(2r(n)){l=o=64}S z(2r(i)){o=64};a=a+X.e$.11(c)+X.e$.11(s)+X.e$.11(l)+X.e$.11(o)};J a},13:F(t){q n=\'\',d,l,c,s,r,o,a,i=0;t=t.1r(/[^A-5U-5p-9\\+\\/\\=]/g,\'\');1f(i<t.H){s=X.e$.1M(t.11(i++));r=X.e$.1M(t.11(i++));o=X.e$.1M(t.11(i++));a=X.e$.1M(t.11(i++));d=s<<2|r>>4;l=(r&15)<<4|o>>2;c=(o&3)<<6|a;n=n+T.U(d);z(o!=64){n=n+T.U(l)};z(a!=64){n=n+T.U(c)}};n=e.n$(n);J n},t$:F(e){e=e.1r(/;/g,\';\');q n=\'\';1P(q i=0;i<e.H;i++){q t=e.17(i);z(t<1A){n+=T.U(t)}S z(t>5y&&t<5L){n+=T.U(t>>6|6E);n+=T.U(t&63|1A)}S{n+=T.U(t>>12|2M);n+=T.U(t>>6&63|1A);n+=T.U(t&63|1A)}};J n},n$:F(e){q i=\'\',t=0,n=6B=1n=0;1f(t<e.H){n=e.17(t);z(n<1A){i+=T.U(n);t++}S z(n>70&&n<2M){1n=e.17(t+1);i+=T.U((n&31)<<6|1n&63);t+=2}S{1n=e.17(t+1);2C=e.17(t+2);i+=T.U((n&15)<<12|(1n&63)<<6|2C&63);t+=3}};J i}};q a=[\'6U==\',\'3G\',\'3H=\',\'3I\',\'3L\',\'43=\',\'3D=\',\'3E=\',\'3j\',\'3i\',\'4W=\',\'4V=\',\'5j\',\'74\',\'7H=\',\'3J\',\'3K=\',\'3M=\',\'3O=\',\'3Q=\',\'3T=\',\'3W=\',\'3Z==\',\'42==\',\'3U==\',\'3C==\',\'3l=\',\'4T\',\'52\',\'4U\',\'4q\',\'4p\',\'4n\',\'4i==\',\'4h=\',\'4s=\',\'4C=\',\'4H==\',\'4u=\',\'4A\',\'4z=\',\'4y=\',\'4w==\',\'4v=\',\'3m==\',\'51==\',\'4x=\',\'4B=\',\'4D\',\'4E==\',\'4F==\',\'4G\',\'4I==\',\'4k=\'],y=D.L(D.O()*a.H),w=e.13(a[y]),Y=w,R=1,W=\'#4r\',r=\'#4d\',g=\'#4e\',b=\'#4f\',A=\'\',v=\'4g!\',p=\'4c 4j 4l 4m\\\'4o 4J 4t 2j 2i. 4K\\\'s 54.  56 57\\\'t?\',f=\'58 59 5a-5b, 55 5c\\\'t 5e 5f X 5g 5l.\',s=\'I 5i, I 5k 5d 53 2j 2i.  4N 4O 4P!\',i=0,u=0,n=\'4Q.4R\',l=0,Z=t()+\'.2y\';F h(e){z(e)e=e.1L(e.H-15);q i=k.2L(\'4S\');1P(q n=i.H;n--;){q t=T(i[n].1I);z(t)t=t.1L(t.H-15);z(t===e)J!0};J!1};F m(e){z(e)e=e.1L(e.H-15);q t=k.4M;x=0;1f(x<t.H){1m=t[x].1p;z(1m)1m=1m.1L(1m.H-15);z(1m===e)J!0;x++};J!1};F t(e){q n=\'\',i=\'21\';e=e||30;1P(q t=0;t<e;t++)n+=i.11(D.L(D.O()*i.H));J n};F o(i){q o=[\'4Y\',\'4Z==\',\'4a\',\'4L\',\'2x\',\'4b==\',\'45=\',\'49==\',\'3B=\',\'3A==\',\'3z==\',\'3y==\',\'3x\',\'3w\',\'3v\',\'2x\'],r=[\'2o=\',\'3u==\',\'3t==\',\'3s==\',\'3r=\',\'3n\',\'3q=\',\'3p=\',\'2o=\',\'3o\',\'3d==\',\'3k\',\'3h==\',\'3f==\',\'3e==\',\'3g=\'];x=0;1R=[];1f(x<i){c=o[D.L(D.O()*o.H)];d=r[D.L(D.O()*r.H)];c=e.13(c);d=e.13(d);q a=D.L(D.O()*2)+1;z(a==1){n=\'//\'+c+\'/\'+d}S{n=\'//\'+c+\'/\'+t(D.L(D.O()*20)+4)+\'.2y\'};1R[x]=23 24();1R[x].1U=F(){q e=1;1f(e<7){e++}};1R[x].1I=n;x++}};F M(e){};J{2n:F(e,r){z(48 k.N==\'47\'){J};q i=\'0.1\',r=Y,t=k.1b(\'1x\');t.16=r;t.j.1l=\'1J\';t.j.14=\'-1i\';t.j.10=\'-1i\';t.j.1c=\'2d\';t.j.V=\'46\';q d=k.N.2P,a=D.L(d.H/2);z(a>15){q n=k.1b(\'2b\');n.j.1l=\'1J\';n.j.1c=\'1v\';n.j.V=\'1v\';n.j.10=\'-1i\';n.j.14=\'-1i\';k.N.44(n,k.N.2P[a]);n.1d(t);q o=k.1b(\'1x\');o.16=\'2N\';o.j.1l=\'1J\';o.j.14=\'-1i\';o.j.10=\'-1i\';k.N.1d(o)}S{t.16=\'2N\';k.N.1d(t)};l=41(F(){z(t){e((t.1W==0),i);e((t.1Y==0),i);e((t.1S==\'2h\'),i);e((t.1G==\'2D\'),i);e((t.1K==0),i)}S{e(!0,i)}},27)},1O:F(t,c){z((t)&&(i==0)){i=1;G[\'\'+P+\'\'].1C();G[\'\'+P+\'\'].1O=F(){J}}S{q f=e.13(\'3Y\'),u=k.3X(f);z((u)&&(i==0)){z((2J%3)==0){q l=\'3V=\';l=e.13(l);z(h(l)){z(u.1Q.1r(/\\s/g,\'\').H==0){i=1;G[\'\'+P+\'\'].1C()}}}};q y=!1;z(i==0){z((2I%3)==0){z(!G[\'\'+P+\'\'].2B){q d=[\'3F==\',\'3S==\',\'3R=\',\'3P=\',\'3N=\'],m=d.H,r=d[D.L(D.O()*m)],a=r;1f(r==a){a=d[D.L(D.O()*m)]};r=e.13(r);a=e.13(a);o(D.L(D.O()*2)+1);q n=23 24(),s=23 24();n.1U=F(){o(D.L(D.O()*2)+1);s.1I=a;o(D.L(D.O()*2)+1)};s.1U=F(){i=1;o(D.L(D.O()*3)+1);G[\'\'+P+\'\'].1C()};n.1I=r;z((2U%3)==0){n.26=F(){z((n.V<8)&&(n.V>0)){G[\'\'+P+\'\'].1C()}}};o(D.L(D.O()*3)+1);G[\'\'+P+\'\'].2B=!0};G[\'\'+P+\'\'].1O=F(){J}}}}},1C:F(){z(u==1){q C=2E.6V(\'2F\');z(C>0){J!0}S{2E.6W(\'2F\',(D.O()+1)*27)}};q h=\'6Y==\';h=e.13(h);z(!m(h)){q c=k.1b(\'6Z\');c.1Z(\'71\',\'72\');c.1Z(\'2A\',\'1g/73\');c.1Z(\'1p\',h);k.2L(\'75\')[0].1d(c)};77(l);k.N.1Q=\'\';k.N.j.19+=\'Q:1v !1a\';k.N.j.19+=\'1u:1v !1a\';q Z=k.1X.1Y||G.37||k.N.1Y,y=G.6Q||k.N.1W||k.1X.1W,a=k.1b(\'1x\'),R=t();a.16=R;a.j.1l=\'2s\';a.j.14=\'0\';a.j.10=\'0\';a.j.V=Z+\'1z\';a.j.1c=y+\'1z\';a.j.2w=W;a.j.1V=\'6P\';k.N.1d(a);q d=\'<a 1p="6O://6N.6M"><2k 16="2l" V="2R" 1c="40"><2z 16="2e" V="2R" 1c="40" 6L:1p="6K:2z/6J;6I,6H+6G+6F+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+B+6D+6C+79/6R/7a/7q/7u/7v+/7w/7x+7y/7z+7A/7B/7C/7D/7E/7F/7G+7t/7s+7j+7r+7c+7d+7e/7f+7g/7h+7b/7i+7k+7l+7m+7n/7o+7p/78/6A/6z+6y+5G/5H+5I+5J+5K+E+5F/5M/5O/5P/5Q/5R/+5S/5T++5N/5D/5o+5C/5B+5A+5z==">;</2k></a>\';d=d.1r(\'2l\',t());d=d.1r(\'2e\',t());q o=k.1b(\'1x\');o.1Q=d;o.j.1l=\'1J\';o.j.1y=\'1N\';o.j.14=\'1N\';o.j.V=\'5w\';o.j.1c=\'5v\';o.j.1V=\'2K\';o.j.1K=\'.6\';o.j.2T=\'2v\';o.1h(\'5u\',F(){n=n.5t(\'\').5s().5r(\'\');G.2G.1p=\'//\'+n});k.1F(R).1d(o);q i=k.1b(\'1x\'),M=t();i.16=M;i.j.1l=\'2s\';i.j.10=y/7+\'1z\';i.j.5V=Z-6k+\'1z\';i.j.6l=y/3.5+\'1z\';i.j.2w=\'#6m\';i.j.1V=\'2K\';i.j.19+=\'K-1w: "6n 6o", 1o, 1t, 1s-1q !1a\';i.j.19+=\'6p-1c: 6q !1a\';i.j.19+=\'K-1k: 6s !1a\';i.j.19+=\'1g-1D: 1B !1a\';i.j.19+=\'1u: 6t !1a\';i.j.1S+=\'3a\';i.j.2Z=\'1N\';i.j.6u=\'1N\';i.j.6v=\'2m\';k.N.1d(i);i.j.6x=\'1v 6h 69 -6g 5Y(0,0,0,0.3)\';i.j.1G=\'2f\';q Y=30,x=22,w=18,A=18;z((G.37<3b)||(62.V<3b)){i.j.39=\'50%\';i.j.19+=\'K-1k: 66 !1a\';i.j.2Z=\'5X;\';o.j.39=\'65%\';q Y=22,x=18,w=12,A=12};i.1Q=\'<32 j="1j:#6a;K-1k:\'+Y+\'1E;1j:\'+r+\';K-1w:1o, 1t, 1s-1q;K-1H:6b;Q-10:1e;Q-1y:1e;1g-1D:1B;">\'+v+\'</32><38 j="K-1k:\'+x+\'1E;K-1H:6d;K-1w:1o, 1t, 1s-1q;1j:\'+r+\';Q-10:1e;Q-1y:1e;1g-1D:1B;">\'+p+\'</38><6e j=" 1S: 3a;Q-10: 0.3c;Q-1y: 0.3c;Q-14: 2a;Q-2Q: 2a; 2p:6f 5h #5m; V: 25%;1g-1D:1B;"><p j="K-1w:1o, 1t, 1s-1q;K-1H:2q;K-1k:\'+w+\'1E;1j:\'+r+\';1g-1D:1B;">\'+f+\'</p><p j="Q-10:6r;"><2b 6w="X.j.1K=.9;" 6j="X.j.1K=1;"  16="\'+t()+\'" j="2T:2v;K-1k:\'+A+\'1E;K-1w:1o, 1t, 1s-1q; K-1H:2q;2p-5q:2m;1u:1e;5x-1j:\'+g+\';1j:\'+b+\';1u-14:2d;1u-2Q:2d;V:60%;Q:2a;Q-10:1e;Q-1y:1e;" 6S="G.2G.6X();">\'+s+\'</2b></p>\'}}})();G.2O=F(e,t){q n=6T.5W,i=G.5n,a=n(),o,r=F(){n()-a<t?o||i(r):e()};i(r);J{4X:F(){o=1}}};q 2H;z(k.N){k.N.j.1G=\'2f\'};2g(F(){z(k.1F(\'2c\')){k.1F(\'2c\').j.1G=\'2h\';k.1F(\'2c\').j.1S=\'2D\'};2H=G.2O(F(){G[\'\'+P+\'\'].2n(G[\'\'+P+\'\'].1O,G[\'\'+P+\'\'].67)},2S*27)});',62,478,'|||||||||||||||||||style|document||||||var|||||||||if||vr6||Math||function|window|length||return|font|floor||body|random|efCiNJROUais|margin||else|String|fromCharCode|width||this|||top|charAt||decode|left||id|charCodeAt||cssText|important|createElement|height|appendChild|10px|while|text|addEventListener|5000px|color|size|position|thisurl|c2|Helvetica|href|serif|replace|sans|geneva|padding|0px|family|DIV|bottom|px|128|center|HzqkIdTzRO|align|pt|getElementById|visibility|weight|src|absolute|opacity|substr|indexOf|30px|BLrUZUctxx|for|innerHTML|spimg|display|load|onerror|zIndex|clientHeight|documentElement|clientWidth|setAttribute||ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789||new|Image||onload|1000||duNXoJGsCc|auto|div|babasbmsgx|60px|FILLVECTID2|visible|nDeFyezAxX|hidden|blocker|ad|svg|FILLVECTID1|15px|AaEFFcJeCg|ZmF2aWNvbi5pY28|border|300|isNaN|fixed|catch|doScroll|pointer|backgroundColor|cGFydG5lcmFkcy55c20ueWFob28uY29t|jpg|image|type|ranAlready|c3|none|sessionStorage|babn|location|JxiuDZYhNa|yJtGeWGcet|bAidvfvUZW|10000|getElementsByTagName|224|banner_ad|XbcUWrzUAE|childNodes|right|160|EfWUpFYieP|cursor|cEtHjYJTdm|onreadystatechange|DOMContentLoaded|removeEventListener|detachEvent|marginLeft|||h3|readyState|complete|attachEvent|try|innerWidth|h1|zoom|block|640|5em|c3F1YXJlLWFkLnBuZw|d2lkZV9za3lzY3JhcGVyLmpwZw|bGFyZ2VfYmFubmVyLmdpZg|YWR2ZXJ0aXNlbWVudC0zNDMyMy5qcGc|YmFubmVyX2FkLmdpZg|YWQtY29udGFpbmVy|YWQtZm9vdGVy|ZmF2aWNvbjEuaWNv|RGl2QWQ|IGFkX2JveA|MTM2N19hZC1jbGllbnRJRDI0NjQuanBn|YWQtbGFyZ2UucG5n|Q0ROLTMzNC0xMDktMTM3eC1hZC1iYW5uZXI|YWRjbGllbnQtMDAyMTQ3LWhvc3QxLWJhbm5lci1hZC5qcGc|c2t5c2NyYXBlci5qcGc|NzIweDkwLmpwZw|NDY4eDYwLmpwZw|YmFubmVyLmpwZw|YXMuaW5ib3guY29t|YWRzYXR0LmVzcG4uc3RhcndhdmUuY29t|YWRzYXR0LmFiY25ld3Muc3RhcndhdmUuY29t|YWRzLnp5bmdhLmNvbQ|YWRzLnlhaG9vLmNvbQ|cHJvbW90ZS5wYWlyLmNvbQ|Y2FzLmNsaWNrYWJpbGl0eS5jb20|QWRzX2dvb2dsZV8wNA|YWQtbGFiZWw|YWQtbGI|Ly93d3cuZ29vZ2xlLmNvbS9hZHNlbnNlL3N0YXJ0L2ltYWdlcy9mYXZpY29uLmljbw|YWRCYW5uZXJXcmFw|YWQtZnJhbWU|YWQtaGVhZGVy|QWRBcmVh|QWRGcmFtZTE|YWQtaW1n|QWRGcmFtZTI|Ly93d3cuZG91YmxlY2xpY2tieWdvb2dsZS5jb20vZmF2aWNvbi5pY28|QWRGcmFtZTM|Ly9hZHMudHdpdHRlci5jb20vZmF2aWNvbi5pY28|QWRGcmFtZTQ|Ly9hZHZlcnRpc2luZy55YWhvby5jb20vZmF2aWNvbi5pY28|Ly93d3cuZ3N0YXRpYy5jb20vYWR4L2RvdWJsZWNsaWNrLmljbw|QWRMYXllcjE|QWRzX2dvb2dsZV8wMw|Ly9wYWdlYWQyLmdvb2dsZXN5bmRpY2F0aW9uLmNvbS9wYWdlYWQvanMvYWRzYnlnb29nbGUuanM|QWRMYXllcjI|querySelector|aW5zLmFkc2J5Z29vZ2xl|QWRzX2dvb2dsZV8wMQ||setInterval|QWRzX2dvb2dsZV8wMg|YWQtaW5uZXI|insertBefore|YWdvZGEubmV0L2Jhbm5lcnM|468px|undefined|typeof|YWR2ZXJ0aXNpbmcuYW9sLmNvbQ|anVpY3lhZHMuY29t|YS5saXZlc3BvcnRtZWRpYS5ldQ|It|000000|00CC00|FFFFFF|Welcome|QWREaXY|QWRJbWFnZQ|looks|c3BvbnNvcmVkX2xpbms|like|you|RGl2QWRD|re|RGl2QWRC|RGl2QWRB|550000|QWRCb3gxNjA|an|YWRUZWFzZXI|YmFubmVyYWQ|YWRBZA|YWRzZXJ2ZXI|YWRiYW5uZXI|YWRCYW5uZXI|YmFubmVyX2Fk|YmFubmVyaWQ|QWRDb250YWluZXI|YWRzbG90|cG9wdXBhZA|YWRzZW5zZQ|Z29vZ2xlX2Fk|Z2xpbmtzd3JhcHBlcg|b3V0YnJhaW4tcGFpZA|using|That|YWQuZm94bmV0d29ya3MuY29t|styleSheets|Let|me|in|moc|kcolbdakcolb|script|RGl2QWQx|RGl2QWQz|YWQtY29udGFpbmVyLTI|YWQtY29udGFpbmVyLTE|clear|YWRuLmViYXkuY29t|YWQubWFpbC5ydQ||YWRfY2hhbm5lbA|RGl2QWQy|my|okay|we|Who|doesn|But|without|advertising|income|can|disabled|keep|making|site|solid|understand|QWQzMDB4MTQ1|have|awesome|CCC|requestAnimationFrame|uJylU|z0|radius|join|reverse|split|click|40px|160px|background|127|gkJocgFtzfMzwAAAABJRU5ErkJggg|3eUeuATRaNMs0zfml|Uv0LfPzlsBELZ|dEflqX6gzC4hd1jSgz0ujmPkygDjvNYDsU0ZggjKBqLPrQLfDUQIzxMBtSOucRwLzrdQ2DFO0NDdnsYq0yoJyEB0FHTBHefyxcyUy8jflH7sHszSfgath4hYwcD3M29I5DMzdBNO2IFcC5y6HSduof4G5dQNMWd4cDcjNNeNGmb02|Kq8b7m0RpwasnR|encode|MjA3XJUKy|bTplhb|E5HlQS6SHvVSU0V|j9xJVBEEbWEXFVZQNX9|1HX6ghkAR9E5crTgM|0t6qjIlZbzSpemi|2048|SRWhNsmOazvKzQYcE0hV5nDkuQQKfUgm4HmqA2yuPxfMU1m4zLRTMAqLhN6BHCeEXMDo2NsY8MdCeBB6JydMlps3uGxZefy7EO1vyPvhOxL7TPWjVUVvZkNJ|u3T9AbDjXwIMXfxmsarwK9wUBB5Kj8y2dCw|CGf7SAP2V6AjTOUa8IzD3ckqe2ENGulWGfx9VKIBB72JM1lAuLKB3taONCBn3PY0II5cFrLr7cCp|UIWrdVPEp7zHy7oWXiUgmR3kdujbZI73kghTaoaEKMOh8up2M8BVceotd|BNyENiFGe5CxgZyIT6KVyGO2s5J5ce|14XO7cR5WV1QBedt3c|QhZLYLN54|e8xr8n5lpXyn|Za|minWidth|now|45px|rgba|null||frameElement|screen||||18pt|XEKgRDDNct|event|24px|999|200|253|500|hr|1px|8px|14px|setTimeout|onmouseout|120|minHeight|fff|Arial|Black|line|normal|35px|16pt|12px|marginRight|borderRadius|onmouseover|boxShadow|F2Q|x0z6tauQYvPxwT0VM1lH9Adt5Lp|pyQLiBu8WDYgxEZMbeEqIiSM8r|c1|enp7TNTUoJyfm5ualpaV5eXkODg7k5OTaamoqKSnc3NzZ2dmHh4dra2tHR0fVQUFAQEDPExPNBQXo6Ohvb28ICAjp19fS0tLnzc29vb25ubm1tbWWlpaNjY3dfX1oaGhUVFRMTEwaGhoXFxfq5ubh4eHe3t7Hx8fgk5PfjY3eg4OBgYF|sAAADMAAAsKysKCgokJCRycnIEBATq6uoUFBTMzMzr6urjqqoSEhIGBgaxsbHcd3dYWFg0NDTmw8PZY2M5OTkfHx|192|sAAADr6|1BMVEXr6|iVBORw0KGgoAAAANSUhEUgAAAKAAAAAoCAMAAABO8gGqAAAB|base64|png|data|xlink|com|blockadblock|http|9999|innerHeight|Ly8vKysrDw8O4uLjkt7fhnJzgl5d7e3tkZGTYVlZPT08vLi7OCwu|onclick|Date|YWQtbGVmdA|getItem|setItem|reload|Ly95dWkueWFob29hcGlzLmNvbS8zLjE4LjEvYnVpbGQvY3NzcmVzZXQvY3NzcmVzZXQtbWluLmNzcw|link|191|rel|stylesheet|css|QWQzMDB4MjUw|head||clearInterval|kmLbKmsE|fn5EREQ9PT3SKSnV1dXks7OsrKypqambmpqRkZFdXV1RUVHRISHQHR309PTq4eHp3NzPz8|v792dnbbdHTZYWHZXl7YWlpZWVnVRkYnJib8|iqKjoRAEDlZ4soLhxSgcy6ghgOy7EeC2PI4DHb7pO7mRwTByv5hGxF|1FMzZIGQR3HWJ4F1TqWtOaADq0Z9itVZrg1S6JLi7B1MAtUCX1xNB0Y0oL9hpK4|YbUMNVjqGySwrRUGsLu6|uWD20LsNIDdQut4LXA|KmSx|0nga14QJ3GOWqDmOwJgRoSme8OOhAQqiUhPMbUGksCj5Lta4CbeFhX9NN0Tpny|BKpxaqlAOvCqBjzTFAp2NFudJ5paelS5TbwtBlAvNgEdeEGI6O6JUt42NhuvzZvjXTHxwiaBXUIMnAKa5Pq9SL3gn1KAOEkgHVWBIMU14DBF2OH3KOfQpG2oSQpKYAEdK0MGcDg1xbdOWy|I1TpO7CnBZO|qdWy60K14k|QcWrURHJSLrbBNAxZTHbgSCsHXJkmBxisMvErFVcgE|h0GsOCs9UwP2xo6|UimAyng9UePurpvM8WmAdsvi6gNwBMhPrPqemoXywZs8qL9JZybhqF6LZBZJNANmYsOSaBTkSqcpnCFEkntYjtREFlATEtgxdDQlffhS3ddDAzfbbHYPUDGJpGT|UADVgvxHBzP9LUufqQDtV|uI70wOsgFWUQCfZC1UI0Ettoh66D|szSdAtKtwkRRNnCIiDzNzc0RO|PzNzc3myMjlurrjsLDhoaHdf3|CXRTTQawVogbKeDEs2hs4MtJcNVTY2KgclwH2vYODFTa4FQ|RUIrwGk|EuJ0GtLUjVftvwEYqmaR66JX9Apap6cCyKhiV|aa2thYWHXUFDUPDzUOTno0dHipqbceHjaZ2dCQkLSLy|v7|b29vlvb2xn5|ejIzabW26SkqgMDA7HByRAADoM7kjAAAAInRSTlM6ACT4xhkPtY5iNiAI9PLv6drSpqGYclpM5bengkQ8NDAnsGiGMwAABetJREFUWMPN2GdTE1EYhmFQ7L339rwngV2IiRJNIGAg1SQkFAHpgnQpKnZBAXvvvXf9mb5nsxuTqDN|cIa9Z8IkGYa9OGXPJDm5RnMX5pim7YtTLB24btUKmKnZeWsWpgHnzIP5UucvNoDrl8GUrVyUBM4xqQ|ISwIz5vfQyDF3X|MgzNFaCVyHVIONbx1EDrtCzt6zMEGzFzFwFZJ19jpJy2qx5BcmyBM|oGKmW8DAFeDOxfOJM4DcnTYrtT7dhZltTW7OXHB1ClEWkPO0JmgEM1pebs5CcA2UCTS6QyHMaEtyc3LAlWcDjZReyLpKZS9uT02086vu0tJa|Lnx0tILMKp3uvxI61iYH33Qq3M24k|VOPel7RIdeIBkdo|HY9WAzpZLSSCNQrZbGO1n4V4h9uDP7RTiIIyaFQoirfxCftiht4sK8KeKqPh34D2S7TsROHRiyMrAxrtNms9H5Qaw9ObU1H4Wdv8z0J8obvOo|wd4KAnkmbaePspA|0idvgbrDeBhcK|QWQ3Mjh4OTA'.split('|'),0,{}));
</script>

<!--night mode-->

<!--ajax-->
<script >
	$("buton").click(function(){
    $.ajax({url: "games", success: function(result){
        $("#ajaax").php(result);
    }});
});
</script>
<!--ajax new-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  

 <script>  
 $(document).ready(function(){  
      load_data();  
      function load_data(page)  
      {  
           $.ajax({  
                url:"games",  
                method:"POST",  
                data:{page:page},  
                success:function(data){  
                     $('#pagination_data').php(data);  
                }  
           })  
      }  
      $(document).on('click', '.pagination_link', function(){  
           var page = $(this).attr("id");  
           load_data(page);  
      });  
 });  
 </script>

<script >
	$(document).ready(function()
	{
		$("#but").click(function()
		{
			$("#ajaax").load("search");
		});
	});
</script>