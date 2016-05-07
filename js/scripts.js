window.onload = function() {
    if (document.getElementById('kell') != null ) {
	var h2 = document.getElementsByTagName('h2')[0],
	    seconds = 0,
	    t;

	function subs()
        {
		var currentDate = new Date();

		var praxFinishTime = new Date('2016-05-09T07:30:00.000Z');

		var diff = praxFinishTime.getTime() - currentDate.getTime();	
 		var diffSeconds = Math.floor((diff) / (1000));	

		h2.textContent = diffSeconds;

	    timer();
	}

	function timer() {
	    t = setTimeout(subs, 1000);
	}

	timer();
       
    }
}
