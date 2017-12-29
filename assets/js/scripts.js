var $posts_img = jQuery('.tm-posts_item');

$posts_img.magnificPopup({
  delegate: 'a', // child items selector, by clicking on it popup will open
  type: 'image'
  // other options
});



var obj = {
  "data": {
    "101": {
      "model": "2001 Peterbilt 330",
      "label": "con Terex BT4792",
      "capacity": "23.5 Ton",
      "date": "Mayo 31",
      "imgurl":"assets/img/101.jpg",
      "country":"united_states"
    },

    "102 ": {
      "model": "2002 Sterling M7500",
      "label": "Acterra S/A Manitowoc 1770C",
      "capacity": "17 Ton",
      "date": "Mayo 31",
      "imgurl":"assets/img/102.jpg",
      "country":"united_states"
    },

    "103": {
      "model": "2003 Sterling L7500",
      "label": "con Manitowoc 2892S",
      "capacity": "28 Ton",
      "date": "Junio 1",
      "imgurl":"assets/img/103.jpg",
      "country":"united_states"
    },

    "104": {
      "model": "1999 Sterling L7501",
      "label": "con Terex TC3063",
      "capacity": "15 Ton",
      "date": "Junio 1",
      "imgurl":"assets/img/104.jpg",
      "country":"united_states"
    },

    "105": {
      "model": "1999 Sterling L7501",
      "label": "con Terex TC3063",
      "capacity": "15 Ton",
      "date": "Junio 1",
      "imgurl":"assets/img/105.jpg",
      "country":"united_states"
    },

    "106": {
      "model": "1994 International 2674",
      "label": "con Simon-RO TC4792",
      "capacity": "23 Ton",
      "date": "Junio 1",
      "imgurl":"assets/img/106.jpg",
      "country":"united_states"
    },

    "107": {
      "model": "1995 Ford L9000",
      "label": "con  National 1195",
      "capacity": "27 Ton",
      "date": "Junio 1",
      "imgurl":"assets/img/107.jpg",
      "country":"united_states"
    },

    "108": {
      "model": "2001 Sterling M7500",
      "label": "con Terex BT3063",
      "capacity": "22 Ton",
      "date": "Junio 6",
      "imgurl":"assets/img/108.jpg",
      "country":"united_states"
    },

    "109": {
      "model": "1998 Ford LT9513",
      "label": "con National 1500",
      "capacity": "36 Ton",
      "date": "Junio 6",
      "imgurl":"assets/img/109.jpg",
      "country":"united_states"
    },

    "110": {
      "model": "2004 Sterling LT7500",
      "label": "con Manitex 26101 ",
      "capacity": "22 Ton",
      "date": "Junio 6",
      "imgurl":"assets/img/110.jpg",
      "country":"united_states"
    },

    "111": {
      "model": "2000 Sterling LT7501",
      "label": "con Terex BT3874 ",
      "capacity": "19 Ton",
      "date": "Junio 6",
      "imgurl":"assets/img/111.jpg",
      "country":"united_states"
    },

    "112": {
      "model": "1999 GMC 6500",
      "label": "con Manitex 1461",
      "capacity": "14 Ton",
      "date": "Junio 6",
      "imgurl":"assets/img/112.jpg",
      "country":"united_states"
    },

    "113": {
      "model": "1986 Ford 8000",
      "label": "con National 455",
      "capacity": "8 Ton",
      "date": "Junio 6",
      "imgurl":"assets/img/113.jpg",
      "country":"united_states"
    },

    "114": {
      "model": "2003 Sterling L8500",
      "label": "con National 600D",
      "capacity": "18 Ton",
      "date": "Junio 9",
      "imgurl":"assets/img/114.jpg",
      "country":"united_states"
    },

    "115": {
      "model": "2013 International 7400",
      "label": "Workstar con National 8100D",
      "capacity": "20 Ton",
      "date": "Junio 9",
      "imgurl":"assets/img/115.jpg",
      "country":"mexico"
    },

    "116": {
      "model": "1991 Ford F800 (Nacional)",
      "label": "con Stinger-RO",
      "capacity": "12.5 Ton",
      "imgurl":"assets/img/116.jpg",
      "country":"mexico"
    }
  }
};

function processList(data) {
  var html = "";

  jQuery.each(data, function (item, info) {
    html += '<div class="tm_pb_column col-lg-3 col-md-6 col-sm-12">';
    html += '  <div class="tm-posts_item" style="padding-bottom: 30px;">';
    html += '    <div class="wrap-heading">';
    html += '      <a href="' + info.imgurl + '" class="tm-posts_img"><img src="' + info.imgurl + '"></a>';
    html += '      <h5 class="tm-posts_item_title ' + (info.date ? '' : 'buyitnow')  + '"><a href="' + info.imgurl + '" rel="bookmark">' + info.capacity + '</a></h5>';
    html += '    </div>';
    html += '    <div class="tm-posts_item_meta">';
    html += '      <a href="' + info.imgurl + '" class="post-date">';
    html += '        <time style="font-weight: 700;">' + info.model + '<i class="flag f16_' + info.country + '"></i> <br/> ' + info.label + '</time>';
    html += '      </a>';
    html += '    </div>';
    html += '    <div class="btn-wrap">';
    html += '      <a href="' + info.imgurl + '" class="">';
    html +=         info.date ? '<span class="btn btn__text">' + info.date + '</span>' : '<span class="btn btn__text">Comprar Ahora</span><span class="btn btn__text">Hacer Oferta</span>';
    html += '      </a>';
    html += '    </div>';
    html += '  </div>';
    html += '</div>';
  });

  jQuery('#ppeList').html(html);
}

jQuery(function () {
  processList(obj.data);
});