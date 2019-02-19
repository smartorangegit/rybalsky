(function(){

    // Путь к PHP обработчику и ID трекера гугл аналитики
    var root = '/include/analytics/analytics.php';
    var trackingId = 'UA-86922657-1';

    function pageLoaded() {
        ga('create', trackingId, 'auto');
        ga('send', 'pageview');
    
        var clientId, data;
    
        function sendData(url, dataToSend){
            var body = '';
            var xhr = new XMLHttpRequest();
            xhr.open('POST', url);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    
            for(var key in dataToSend) {
                if(dataToSend.hasOwnProperty(key)) {
                    body += key + '=' + dataToSend[key] + '&';
                }
            }
            xhr.send(body);
    
            xhr.onreadystatechange = function() {
    
                if (this.readyState != 4 || this.status != 200) return;
    
                console.log(this.responseText);
    
            }
    
        }
    
        data = (function(document) {
    
            /**
            * Original script is created by Lunametrics 
            * https://www.lunametrics.com/labs/recipes/utmz-cookie-replicator-for-gtm/
            * Modified by Analytics Mania https://www.analyticsmania.com/
            *
            * Data is stored in the __initialTrafficSource cookie in the following format; brackets
            * indicate optional data and are aexcluded from the stored string:
            *
            * utm_source=SOURCE|utm_medium=MEDIUM[|utm_campaign=CAMPAIGN][|utm_content=CONTENT]
            * [|utm_term=TERM/KEYWORD]
            *
            * e.g.:
            * utm_source=example.com|utm_medium=affl-link|utm_campaign=foo|utm_content=bar|utm_term=biz
    
            utm_source is campaign source
            utm_medium is campaign medium
            utm_campaign is campaign name
            utm_content is campaign content
            utm_term is campaign term
    
            */
    
            var referrer = document.referrer;
            var gaReferral = {
                'utm_source': 'direct',
                'utm_medium': 'no_utm',
                'utm_campaign': 'no_utm',
                'utm_content': 'no_utm',
                'utm_term' : 'no_utm'
            };
            var thisHostname = document.location.hostname;
            var thisDomain = getDomain_(thisHostname);
            var referringDomain = getDomain_(document.referrer);
            var sessionCookie = getCookie_('__utmzzses');
            //   var cookieExpiration = new Date(+new Date() + 1000 * 60 * 60 * 24 * 30 * 24);
            var qs = document.location.search.replace('?', '');
            var hash = document.location.hash.replace('#', '');
            var gaParams = parseGoogleParams(qs + '#' + hash);
            var referringInfo = parseGaReferrer(referrer);
            var storedVals = getCookie_('__utmz') || getCookie_('__utmzz');
            var newCookieVals = [];
            var keyMap = {
                'utm_source': 'utm_source',
                'utm_medium': 'utm_medium',
                'utm_campaign': 'utm_campaign',
                'utm_content': 'utm_content',
                'utm_term': 'utm_term',
                'gclid': 'utmgclid',
                'dclid': 'utmdclid'
            };
    
            var keyFilter = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_content', 'utm_term'];
            var keyName,
                values,
                _val,
                _key,
                raw,
                key,
                len,
                i;
    
            if (sessionCookie && referringDomain === thisDomain) {
    
                gaParams = null;
                referringInfo = null;
    
            }
    
            if (gaParams && (gaParams.utm_source || gaParams.gclid || gaParams.dclid)) {
    
                for (key in gaParams) {
    
                if (typeof gaParams[key] !== 'undefined') {
    
                    keyName = keyMap[key];
                    gaReferral[keyName] = gaParams[key];
    
                }
    
                }
    
            if (gaParams.gclid || gaParams.dclid) {
    
                gaReferral.utm_source = 'google';
                gaReferral.utm_medium = gaReferral.utmgclid ? 'cpc' : 'cpm';
    
            }
    
            } else if (referringInfo) {
    
                gaReferral.utm_source = referringInfo.source;
                gaReferral.utm_medium = referringInfo.medium;
                if (referringInfo.term) gaReferral.utm_term = referringInfo.term;
    
            } else if (storedVals) {
    
                values = {};
                raw = storedVals.split('|');
                len = raw.length;
    
                for (i = 0; i < len; i++) {
    
                _val = raw[i].split('=');
                _key = _val[0].split('.').pop();
                values[_key] = _val[1];
    
                }
    
                gaReferral = values;
    
            }
    
            for (key in gaReferral) {
    
                if (typeof gaReferral[key] !== 'undefined' && keyFilter.indexOf(key) >-1) {
    
                newCookieVals.push(key + '=' + gaReferral[key]);
    
                }
    
            }
    
            //   if (!getCookie_('initialTrafficSource')) {
            //     writeCookie_('initialTrafficSource', newCookieVals.join('|'), cookieExpiration, '/', thisDomain);
            //   }
    
            //   writeCookie_('__utmzzses', 1, null, '/', thisDomain);
    
            function parseGoogleParams(str) {
    
                var campaignParams = ['source', 'medium', 'campaign', 'term', 'content'];
                var regex = new RegExp('(utm_(' + campaignParams.join('|') + ')|(d|g)clid)=.*?([^&#]*|$)', 'gi');
                var gaParams = str.match(regex);
                var paramsObj,
                vals,
                len,
                i;
    
                if (gaParams) {
    
                paramsObj = {};
                len = gaParams.length;
    
                for (i = 0; i < len; i++) {
    
                    vals = gaParams[i].split('=');
    
                    if (vals) {
    
                    paramsObj[vals[0]] = vals[1];
    
                    }
    
                }
    
                }
    
                return paramsObj;
    
            }
    
            function parseGaReferrer(referrer) {
    
                if (!referrer) return;
    
                var searchEngines = {
                'daum.net': {
                    'p': 'q',
                    'n': 'daum'
                },
                'eniro.se': {
                    'p': 'search_word',
                    'n': 'eniro '
                },
                'naver.com': {
                    'p': 'query',
                    'n': 'naver '
                },
                'yahoo.com': {
                    'p': 'p',
                    'n': 'yahoo'
                },
                'msn.com': {
                    'p': 'q',
                    'n': 'msn'
                },
                'bing.com': {
                    'p': 'q',
                    'n': 'live'
                },
                'aol.com': {
                    'p': 'q',
                    'n': 'aol'
                },
                'lycos.com': {
                    'p': 'q',
                    'n': 'lycos'
                },
                'ask.com': {
                    'p': 'q',
                    'n': 'ask'
                },
                'altavista.com': {
                    'p': 'q',
                    'n': 'altavista'
                },
                'search.netscape.com': {
                    'p': 'query',
                    'n': 'netscape'
                },
                'cnn.com': {
                    'p': 'query',
                    'n': 'cnn'
                },
                'about.com': {
                    'p': 'terms',
                    'n': 'about'
                },
                'mamma.com': {
                    'p': 'query',
                    'n': 'mama'
                },
                'alltheweb.com': {
                    'p': 'q',
                    'n': 'alltheweb'
                },
                'voila.fr': {
                    'p': 'rdata',
                    'n': 'voila'
                },
                'search.virgilio.it': {
                    'p': 'qs',
                    'n': 'virgilio'
                },
                'baidu.com': {
                    'p': 'wd',
                    'n': 'baidu'
                },
                'alice.com': {
                    'p': 'qs',
                    'n': 'alice'
                },
                'yandex.com': {
                    'p': 'text',
                    'n': 'yandex'
                },
                'najdi.org.mk': {
                    'p': 'q',
                    'n': 'najdi'
                },
                'seznam.cz': {
                    'p': 'q',
                    'n': 'seznam'
                },
                'search.com': {
                    'p': 'q',
                    'n': 'search'
                },
                'wp.pl': {
                    'p': 'szukaj ',
                    'n': 'wirtulana polska'
                },
                'online.onetcenter.org': {
                    'p': 'qt',
                    'n': 'o*net'
                },
                'szukacz.pl': {
                    'p': 'q',
                    'n': 'szukacz'
                },
                'yam.com': {
                    'p': 'k',
                    'n': 'yam'
                },
                'pchome.com': {
                    'p': 'q',
                    'n': 'pchome'
                },
                'kvasir.no': {
                    'p': 'q',
                    'n': 'kvasir'
                },
                'sesam.no': {
                    'p': 'q',
                    'n': 'sesam'
                },
                'ozu.es': {
                    'p': 'q',
                    'n': 'ozu '
                },
                'terra.com': {
                    'p': 'query',
                    'n': 'terra'
                },
                'mynet.com': {
                    'p': 'q',
                    'n': 'mynet'
                },
                'ekolay.net': {
                    'p': 'q',
                    'n': 'ekolay'
                },
                'rambler.ru': {
                'p': 'words',
                'n': 'rambler'
                },
                'google': {
                'p': 'q',
                'n': 'google'
                }
            };
            var a = document.createElement('a');
            var values = {};
            var searchEngine,
                termRegex,
                term;
    
            a.href = referrer;
    
            // Shim for the billion google search engines
            if (a.hostname.indexOf('google') > -1) {
    
                referringDomain = 'google';
    
            }
    
            if (searchEngines[referringDomain]) {
    
                searchEngine = searchEngines[referringDomain];
                termRegex = new RegExp(searchEngine.p + '=.*?([^&#]*|$)', 'gi');
                term = a.search.match(termRegex);
    
                values.source = searchEngine.n;
                values.medium = 'organic';
    
                values.term = (term ? term[0].split('=')[1] : '') || '(not provided)';
    
            } else if (referringDomain !== thisDomain) {
    
                values.source = a.hostname;
                values.medium = 'referral';
    
            }
    
            return values;
    
            }
    
            // function writeCookie_(name, value, expiration, path, domain) {
    
            //     var str = name + '=' + value + ';';
            //     if (expiration) str += 'Expires=' + expiration.toGMTString() + ';';
            //     if (path) str += 'Path=' + path + ';';
            //     if (domain) str += 'Domain=' + domain + ';';
    
            //     document.cookie = str;
    
            // }
    
            function getCookie_(name) {
    
                var cookies = '; ' + document.cookie
                var cvals = cookies.split('; ' + name + '=');
    
                if (cvals.length > 1) return cvals.pop().split(';')[0];
    
            }
    
            function getDomain_(url) {
    
            if (!url) return;
    
            var a = document.createElement('a');
            a.href = url;
    
            try {
    
                return a.hostname.match(/[^.]*\.[^.]{2,3}(?:\.[^.]{2,3})?$/)[0];
    
            } catch(squelch) {}
    
            }
    
            return gaReferral;
    
        })(document);
    
    
        ga(function(tracker) {
            clientId = tracker.get('clientId');
            data.clientId = clientId;
            sendData( root, data);
        });
    }; // End pageLoaded

    window.addEventListener('load', pageLoaded);

})();