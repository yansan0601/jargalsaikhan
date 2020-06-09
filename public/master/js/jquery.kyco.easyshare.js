/*
**
**  jquery.kyco.easyshare
**  =====================
**
**  Version 1.3.3
**
**  Brought to you by
**  https://www.kycosoftware.com
**
**  Copyright 2015 Cornelius Weidmann
**
**  Distributed under the GPL
**
*/

'use strict';

var kyco = kyco || {};

// kyco.API_PATH = 'http://localhost:8000/api/easyshare.php';

kyco.easyShare = function() {
  var easyshares = [];

  if ($('[data-easyshare]').length > 0) {
    $('[data-easyshare]').each(function(index) {
      easyshares[index]                = {};
      easyshares[index].self           = $(this);
      easyshares[index].url            = easyshares[index].self.data('easyshare-url');
      easyshares[index].countTotal     = easyshares[index].self.find('[data-easyshare-total-count]');
      easyshares[index].countFacebook  = easyshares[index].self.find('[data-easyshare-button-count="facebook"]');
      easyshares[index].loader         = easyshares[index].self.find('[data-easyshare-loader]');
      easyshares[index].FORCE_HTTP     = typeof easyshares[index].self.data('easyshare-http') !== 'undefined';
      easyshares[index].FORCE_HTTPS    = typeof easyshares[index].self.data('easyshare-https') !== 'undefined';
      easyshares[index].SHARE_URL      = typeof easyshares[index].url === 'undefined' || easyshares[index].url === '' ? window.location.href : easyshares[index].url;

      // Facebook share button
      easyshares[index].self.find('[data-easyshare-button="facebook"]').click(function() {
        var width      = 500;
        var height     = 400;
        var leftOffset = ($(window).width() - width) / 2;
        var topOffset  = ($(window).height() - height) / 2;
        var url        = 'https://www.facebook.com/sharer/sharer.php?u=' + easyshares[index].SHARE_URL;
        var opts       = 'width=' + width + ',height=' + height + ',top=' + topOffset + ',left=' + leftOffset;

        window.open(url, 'facebook', opts);
      });

      // Twitter share button
      easyshares[index].self.find('[data-easyshare-button="twitter"]').click(function() {
        var text       = $(this).data('easyshare-tweet-text') || '';
        var width      = 575;
        var height     = 440;
        var leftOffset = ($(window).width() - width) / 2;
        var topOffset  = ($(window).height() - height) / 2;
        var url        = 'https://twitter.com/share?text=' + encodeURIComponent(text);
        var opts       = 'status=1,width=' + width + ',height=' + height + ',top=' + topOffset + ',left=' + leftOffset;

        window.open(url, 'twitter', opts);
      });
    });
  }
};

/*
**  kyco.easyShareAddCommas, kyco.easyShareFormatDecimals & kyco.easyShareApproximate
**  are adapted from https://github.com/nfriedly/approximate-number
**  Copyright (c) 2014 Nathan Friedly
**  Licensed under the MIT license
**  Modified by Cornelius Weidmann
*/
kyco.easyShareAddCommas = function(num) {
  var out    = [];
  var digits = Math.round(num).toString().split('');

  if (num < 1000) {
    return num.toString();
  }

  digits.reverse().forEach(function(digit, i) {
    if (i && i % 3 === 0) {
      out.push(',');
    }

    out.push(digit);
  });

  return out.reverse().join('');
};

kyco.easyShareFormatDecimals = function(num, base) {
  var workingNum = num / base;

  return workingNum < 10 ? Math.round(workingNum * 10) / 10 : Math.round(workingNum);
};

kyco.easyShareApproximate = function(num) {
  var negative = num < 0;
  var number = num;
  var numString;

  if (negative) {
    number = Math.abs(num);
  }

  if (number < 10000) {
    numString = kyco.easyShareAddCommas(number);
  } else if (number < 1000000) {
    numString = kyco.easyShareFormatDecimals(number, 1000) + 'k';
  } else if (number < 1000000000) {
    numString = kyco.easyShareFormatDecimals(number, 1000000) + 'm';
  } else {
    numString = kyco.easyShareAddCommas(kyco.easyShareFormatDecimals(number, 1000000000)) + 'b';
  }

  if (negative) {
    numString = '-' + numString;
  }

  return numString;
};

$(document).ready(function() {
  kyco.easyShare();
});
