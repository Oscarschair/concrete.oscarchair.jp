document.addEventListener('DOMContentLoaded', function () {
	var target_id = 'auto_blog_nav';
	var target_headline = 'h2.heading';
	var target_contents = document.getElementById( target_id );

    if( target_contents != null ){
        var matches = document.querySelectorAll( target_headline );
        var ol = document.createElement('ol');
        matches.forEach( function (value, i) {
            if ( value.id === "undefined" ) {   // if tag has no id, add id
                value.id = "blogLink".i;
            }
            var li = document.createElement('li');
            var a = document.createElement('a');
            a.innerHTML = value.innerHTML;
            a.href = '#' + value.id;
            li.appendChild(a);
            ol.appendChild(li);
        });
        target_contents.appendChild(ol);
    }
});