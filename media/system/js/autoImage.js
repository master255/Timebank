//Автоматическая загрузка картинок
var PhotoImage ;
var PhotoInput ;

function autoImg(searchRes, pImg, pInt) {
		if (searchRes.length > 0) {
		searchRes =searchRes.replace(" ","+");
		PhotoImage = document.getElementById(pImg);
		PhotoInput = document.getElementById(pInt);
		PhotoImage.src = "/components/com_adsmanager/images/loader.gif";
		var imageSearch = new google.search.ImageSearch();
		// Какой размер ищем
		//imageSearch.setRestriction(google.search.ImageSearch.RESTRICT_IMAGESIZE,
		//                          google.search.ImageSearch.IMAGESIZE_EXTRA_LARGE);
		//тип искомых файлов
		/*  imageSearch.setRestriction(google.search.ImageSearch.RESTRICT_FILETYPE,
										google.search.ImageSearch.FILETYPE_JPG);  */
		imageSearch.setSearchCompleteCallback(this, searchComplete, [imageSearch]);
		// Find me a beautiful car.
		imageSearch.execute(searchRes);	
		}
}

function searchComplete(searcher) {
	// Check that we got results
	if ((searcher.results) && (searcher.results.length > 0)) {
		// Loop through our results, printing them to the page.
		var results = searcher.results;
		var i = Math.floor(Math.random()*(results.length));
		var result = results[i];
		var data = 0;
		var zap = result.unescapedUrl;
		//AJAX запрос
		 /* alert ('http://'+location.hostname+'/index.php?option=com_tranz&view=img&layout=img&no_html=1&pat='+zap);  */
		 $.ajax({
			url: 'http://'+location.hostname+'/index.php?option=com_tranz&view=img&layout=img&no_html=1&pat='+zap, 
			success: function (data) { 
				/* alert (data); */
				if (data == 1) {
				PhotoImage.src = zap;
				PhotoInput.value = zap;
				} else {
				PhotoImage.src = "/components/com_adsmanager/images/loader.gif";
				PhotoInput.value = '';
				autoImg(document.getElementById('ad_headline').value, 'PhotoImage', 'ad_pictureg1');
				}
			}
		}); 
	}
}