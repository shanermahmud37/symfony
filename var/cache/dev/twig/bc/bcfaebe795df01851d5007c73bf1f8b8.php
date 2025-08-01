<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @WebProfiler/Profiler/toolbar_js.html.twig */
class __TwigTemplate_1f0ad82fef17ee2fae10644bfb359478 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_js.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_js.html.twig"));

        // line 1
        yield "<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfwdt";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 2, $this->source); })()), "html", null, true);
        yield "\" class=\"sf-toolbar sf-toolbar-opened\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\">
    ";
        // line 3
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar.html.twig", ["templates" => ["request" => "@WebProfiler/Profiler/cancel.html.twig"], "profile" => null, "profiler_url" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_profiler", ["token" =>         // line 8
(isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 8, $this->source); })())]), "profiler_markup_version" => 3]);
        // line 10
        yield "
</div>

<link rel=\"stylesheet\"";
        // line 13
        if ((($tmp = (isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new RuntimeError('Variable "csp_style_nonce" does not exist.', 13, $this->source); })())) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            yield " nonce=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["csp_style_nonce"]) || array_key_exists("csp_style_nonce", $context) ? $context["csp_style_nonce"] : (function () { throw new RuntimeError('Variable "csp_style_nonce" does not exist.', 13, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield " href=\"";
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_wdt_stylesheet");
        yield "\" />

";
        // line 18
        yield "<script";
        if ((array_key_exists("csp_script_nonce", $context) && (isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 18, $this->source); })()))) {
            yield " nonce=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["csp_script_nonce"]) || array_key_exists("csp_script_nonce", $context) ? $context["csp_script_nonce"] : (function () { throw new RuntimeError('Variable "csp_script_nonce" does not exist.', 18, $this->source); })()), "html", null, true);
            yield "\"";
        }
        yield ">/*<![CDATA[*/
    if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {
        Sfjs = (function() {
            \"use strict\";

            if ('classList' in document.documentElement) {
                var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };
                var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };
                var addClass = function(el, cssClass) { el.classList.add(cssClass); };
                var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };
            } else {
                var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };
                var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };
                var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };
                var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };
            }

            var noop = function() {};

            var profilerStorageKey = 'symfony/profiler/';

            var addEventListener;

            var el = document.createElement('div');
            if (!('addEventListener' in el)) {
                addEventListener = function (element, eventName, callback) {
                    element.attachEvent('on' + eventName, callback);
                };
            } else {
                addEventListener = function (element, eventName, callback) {
                    element.addEventListener(eventName, callback, false);
                };
            }

            var request = function(url, onSuccess, onError, payload, options, tries) {
                url = new URL(url);
                url.searchParams.set('XDEBUG_IGNORE', '1');
                url = url.toString();
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.retry = options.retry || false;
                tries = tries || 1;
                /* this delays for 125, 375, 625, 875, and 1000, ... */
                var delay = tries < 5 ? (tries - 0.5) * 250 : 1000;

                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.retry && !options.stop) {
                        setTimeout(function() {
                            if (options.stop) {
                                return;
                            }
                            request(url, onSuccess, onError, payload, options, tries + 1);
                        }, delay);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };

                if (options.onSend) {
                    options.onSend(tries);
                }

                xhr.send(payload || '');
            };

            var getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            };

            var setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

            var requestStack = [];

            var extractHeaders = function(xhr, stackElement) {
                /* Here we avoid to call xhr.getResponseHeader in order to */
                /* prevent polluting the console with CORS security errors */
                var allHeaders = xhr.getAllResponseHeaders();
                var ret;

                if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {
                    stackElement.profile = ret[1];
                }
                if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {
                    stackElement.profilerUrl = ret[1];
                }
                if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {
                    stackElement.toolbarReplaceFinished = false;
                    stackElement.toolbarReplace = '1' === ret[1];
                }
            };

            var successStreak = 4;
            var pendingRequests = 0;
            var renderAjaxRequests = function() {
                var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');
                if (!requestCounter) {
                    return;
                }
                requestCounter.textContent = requestStack.length;

                var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");
                if (infoSpan) {
                    infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');
                }

                var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');
                if (requestStack.length) {
                    ajaxToolbarPanel.style.display = '';
                } else {
                    ajaxToolbarPanel.style.display = 'none';
                }
                if (pendingRequests > 0) {
                    addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                } else if (successStreak < 4) {
                    addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                    removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                } else {
                    removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                    removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                }
            };

            var startAjaxRequest = function(index) {
                var tbody = document.querySelector('.sf-toolbar-ajax-request-list');
                if (!tbody) {
                    return;
                }

                var nbOfAjaxRequest = tbody.rows.length;
                if (nbOfAjaxRequest >= 100) {
                    tbody.deleteRow(0);
                }

                var request = requestStack[index];
                pendingRequests++;
                var row = document.createElement('tr');
                request.DOMNode = row;

                var requestNumberCell = document.createElement('td');
                requestNumberCell.textContent = index + 1;
                row.appendChild(requestNumberCell);

                var profilerCell = document.createElement('td');
                profilerCell.textContent = 'n/a';
                row.appendChild(profilerCell);

                var methodCell = document.createElement('td');
                methodCell.textContent = request.method;
                row.appendChild(methodCell);

                var typeCell = document.createElement('td');
                typeCell.textContent = request.type;
                row.appendChild(typeCell);

                var statusCodeCell = document.createElement('td');
                var statusCode = document.createElement('span');
                statusCode.textContent = 'n/a';
                statusCodeCell.appendChild(statusCode);
                row.appendChild(statusCodeCell);

                var pathCell = document.createElement('td');
                pathCell.className = 'sf-ajax-request-url';
                if ('GET' === request.method) {
                    var pathLink = document.createElement('a');
                    pathLink.setAttribute('href', request.url);
                    pathLink.textContent = request.url;
                    pathCell.appendChild(pathLink);
                } else {
                    pathCell.textContent = request.url;
                }
                pathCell.setAttribute('title', request.url);
                row.appendChild(pathCell);

                var durationCell = document.createElement('td');
                durationCell.className = 'sf-ajax-request-duration';
                durationCell.textContent = 'n/a';
                row.appendChild(durationCell);

                request.liveDurationHandle = setInterval(function() {
                    durationCell.textContent = (new Date() - request.start) + ' ms';
                }, 100);

                row.className = 'sf-ajax-request sf-ajax-request-loading';
                tbody.insertBefore(row, null);

                var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');
                toolbarInfo.scrollTop = toolbarInfo.scrollHeight;

                renderAjaxRequests();
            };

            var finishAjaxRequest = function(index) {
                var request = requestStack[index];
                clearInterval(request.liveDurationHandle);

                if (!request.DOMNode) {
                    return;
                }

                if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {
                    /* Flag as complete because finishAjaxRequest can be called multiple times. */
                    request.toolbarReplaceFinished = true;
                    /* Search up through the DOM to find the toolbar's container ID. */
                    for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {
                        if (elem.id.match(/^sfwdt/)) {
                            Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);
                            break;
                        }
                    }
                }

                pendingRequests--;
                var row = request.DOMNode;
                /* Unpack the children from the row */
                var profilerCell = row.children[1];
                var methodCell = row.children[2];
                var statusCodeCell = row.children[4];
                var statusCodeElem = statusCodeCell.children[0];
                var durationCell = row.children[6];

                if (request.error) {
                    row.className = 'sf-ajax-request sf-ajax-request-error';
                    methodCell.className = 'sf-ajax-request-error';
                    successStreak = 0;
                } else {
                    row.className = 'sf-ajax-request sf-ajax-request-ok';
                    successStreak++;
                }

                if (request.statusCode) {
                    if (request.statusCode < 300) {
                        statusCodeElem.setAttribute('class', 'sf-toolbar-status');
                    } else if (request.statusCode < 400) {
                        statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');
                    } else {
                        statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
                    }
                    statusCodeElem.textContent = request.statusCode;
                } else {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
                }

                if (request.duration) {
                    durationCell.textContent = request.duration + ' ms';
                }

                if (request.profilerUrl) {
                    profilerCell.textContent = '';
                    var profilerLink = document.createElement('a');
                    profilerLink.setAttribute('href', request.profilerUrl);
                    profilerLink.textContent = request.profile;
                    profilerCell.appendChild(profilerLink);
                }

                renderAjaxRequests();
            };

            ";
        // line 297
        if (array_key_exists("excluded_ajax_paths", $context)) {
            // line 298
            yield "            if (window.fetch && window.fetch.polyfill === undefined) {
                var oldFetch = window.fetch;
                window.fetch = function () {
                    var promise = oldFetch.apply(this, arguments);
                    var url = arguments[0];
                    var params = arguments[1];
                    var paramType = Object.prototype.toString.call(arguments[0]);
                    if (paramType === '[object Request]') {
                        url = arguments[0].url;
                        params = {
                            method: arguments[0].method,
                            credentials: arguments[0].credentials,
                            headers: arguments[0].headers,
                            mode: arguments[0].mode,
                            redirect: arguments[0].redirect
                        };
                    } else {
                        url = String(url);
                    }
                    if (!url.match(new RegExp(";
            // line 317
            yield json_encode((isset($context["excluded_ajax_paths"]) || array_key_exists("excluded_ajax_paths", $context) ? $context["excluded_ajax_paths"] : (function () { throw new RuntimeError('Variable "excluded_ajax_paths" does not exist.', 317, $this->source); })()));
            yield "))) {
                        var method = 'GET';
                        if (params && params.method !== undefined) {
                            method = params.method;
                        }

                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'fetch',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;
                        promise.then(function (r) {
                            stackElement.duration = new Date() - stackElement.start;
                            stackElement.error = r.status < 200 || r.status >= 400;
                            stackElement.statusCode = r.status;
                            stackElement.profile = r.headers.get('x-debug-token');
                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');
                            stackElement.toolbarReplaceFinished = false;
                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');
                            finishAjaxRequest(idx);
                        }, function (e){
                            stackElement.error = true;
                            finishAjaxRequest(idx);
                        });
                        startAjaxRequest(idx);
                    }

                    return promise;
                };
            }
            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {
                var proxied = XMLHttpRequest.prototype.open;

                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
                    var self = this;

                    /* prevent logging AJAX calls to static and inline files, like templates */
                    var path = url;
                    if (url.slice(0, 1) === '/') {
                        if (0 === url.indexOf('";
            // line 360
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 360, $this->source); })()), "basePath", [], "any", false, false, false, 360), "js"), "html", null, true);
            yield "')) {
                            path = url.slice(";
            // line 361
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 361, $this->source); })()), "basePath", [], "any", false, false, false, 361)), "html", null, true);
            yield ");
                        }
                    }
                    else if (0 === url.indexOf('";
            // line 364
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 364, $this->source); })()), "schemeAndHttpHost", [], "any", false, false, false, 364) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 364, $this->source); })()), "basePath", [], "any", false, false, false, 364)), "js"), "html", null, true);
            yield "')) {
                        path = url.slice(";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 365, $this->source); })()), "schemeAndHttpHost", [], "any", false, false, false, 365) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["request"]) || array_key_exists("request", $context) ? $context["request"] : (function () { throw new RuntimeError('Variable "request" does not exist.', 365, $this->source); })()), "basePath", [], "any", false, false, false, 365))), "html", null, true);
            yield ");
                    }

                    if (!path.match(new RegExp(";
            // line 368
            yield json_encode((isset($context["excluded_ajax_paths"]) || array_key_exists("excluded_ajax_paths", $context) ? $context["excluded_ajax_paths"] : (function () { throw new RuntimeError('Variable "excluded_ajax_paths" does not exist.', 368, $this->source); })()));
            yield "))) {
                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'xhr',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;

                        this.addEventListener('readystatechange', function() {
                            if (self.readyState == 4) {
                                stackElement.duration = new Date() - stackElement.start;
                                stackElement.error = self.status < 200 || self.status >= 400;
                                stackElement.statusCode = self.status;
                                extractHeaders(self, stackElement);

                                finishAjaxRequest(idx);
                            }
                        }, false);

                        startAjaxRequest(idx);
                    }

                    proxied.apply(this, Array.prototype.slice.call(arguments));
                };
            }
            ";
        }
        // line 397
        yield "
            return {
                hasClass: hasClass,

                removeClass: removeClass,

                addClass: addClass,

                toggleClass: toggleClass,

                getPreference: getPreference,

                setPreference: setPreference,

                addEventListener: addEventListener,

                request: request,

                renderAjaxRequests: renderAjaxRequests,

                getSfwdt: function(token) {
                    if (!this.sfwdt) {
                        this.sfwdt = document.getElementById('sfwdt' + token);
                    }

                    return this.sfwdt;
                },

                load: function(selector, url, onSuccess, onError, options) {
                    var el = document.getElementById(selector);

                    if (el && el.getAttribute('data-sfurl') !== url) {
                        request(
                            url,
                            function(xhr) {
                                el.innerHTML = xhr.responseText;
                                el.setAttribute('data-sfurl', url);
                                removeClass(el, 'loading');
                                var pending = pendingRequests;
                                for (var i = 0; i < requestStack.length; i++) {
                                    startAjaxRequest(i);
                                    if (requestStack[i].duration) {
                                        finishAjaxRequest(i);
                                    }
                                }
                                /* Revert the pending state in case there was a start called without a finish above. */
                                pendingRequests = pending;
                                (onSuccess || noop)(xhr, el);
                            },
                            function(xhr) { (onError || noop)(xhr, el); },
                            '',
                            options
                        );
                    }

                    return this;
                },

                showToolbar: function(token) {
                    var sfwdt = this.getSfwdt(token);

                    if ('closed' === getPreference('toolbar/displayState')) {
                        addClass(sfwdt, 'sf-toolbar-closed');
                        removeClass(sfwdt, 'sf-toolbar-opened');
                    } else {
                        addClass(sfwdt, 'sf-toolbar-opened');
                        removeClass(sfwdt, 'sf-toolbar-closed');
                    }
                },

                hideToolbar: function(token) {
                    var sfwdt = this.getSfwdt(token);
                    addClass(sfwdt, 'sf-toolbar-closed');
                    removeClass(sfwdt, 'sf-toolbar-opened');
                },

                initToolbar: function(token) {
                    this.showToolbar(token);

                    var toggleButton = document.querySelector(`#sfToolbarToggleButton-\${token}`);
                    addEventListener(toggleButton, 'click', function (event) {
                        event.preventDefault();

                        const newState = 'opened' === getPreference('toolbar/displayState') ? 'closed' : 'opened';
                        setPreference('toolbar/displayState', newState);
                        'opened' === newState ? Sfjs.showToolbar(token) : Sfjs.hideToolbar(token);
                    });
                },

                loadToolbar: function(token, newToken) {
                    var that = this;
                    var triesCounter = document.getElementById('sfLoadCounter-' + token);

                    var options = {
                        retry: true,
                        onSend: function (count) {
                            if (count === 3) {
                                that.initToolbar(token);
                            }

                            if (triesCounter) {
                                triesCounter.textContent = count;
                            }
                        },
                    };

                    var cancelButton = document.getElementById('sfLoadCancel-' + token);
                    if (cancelButton) {
                        addEventListener(cancelButton, 'click', function (event) {
                            event.preventDefault();

                            options.stop = true;
                            that.hideToolbar(token);
                        });
                    }

                    newToken = (newToken || token);

                    this.load(
                        'sfwdt' + token,
                        '";
        // line 517
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_wdt", ["token" => "xxxxxx"]), "js"), "html", null, true);
        yield "'.replace(/xxxxxx/, newToken),
                        function(xhr, el) {
                            /* Do nothing in the edge case where the toolbar has already been replaced with a new one */
                            if (!document.getElementById('sfToolbarMainContent-' + newToken)) {
                                return;
                            }

                            /* Evaluate in global scope scripts embedded inside the toolbar */
                            var i, scripts = [].slice.call(el.querySelectorAll('script'));
                            for (i = 0; i < scripts.length; ++i) {
                                if (scripts[i].firstChild) {
                                    eval.call({}, scripts[i].firstChild.nodeValue);
                                }
                            }

                            el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                            if (el.style.display == 'none') {
                                return;
                            }

                            that.initToolbar(newToken);

                            /* Handle toolbar-info position */
                            var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                            for (i = 0; i < toolbarBlocks.length; ++i) {
                                toolbarBlocks[i].onmouseover = function () {
                                    var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                                    var pageWidth = document.body.clientWidth;
                                    var elementWidth = toolbarInfo.offsetWidth;
                                    var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                                    var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                                    /* Reset right and left value, useful on window resize */
                                    toolbarInfo.style.right = '';
                                    toolbarInfo.style.left = '';

                                    if (elementWidth > pageWidth) {
                                        toolbarInfo.style.left = 0;
                                    }
                                    else if (leftValue > 0 && rightValue > 0) {
                                        toolbarInfo.style.right = (rightValue * -1) + 'px';
                                    } else if (leftValue < 0) {
                                        toolbarInfo.style.left = 0;
                                    } else {
                                        toolbarInfo.style.right = '0px';
                                    }
                                };
                            }

                            renderAjaxRequests();
                            addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {
                                requestStack = [];
                                renderAjaxRequests();
                                successStreak = 4;
                                document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';
                            });
                            addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {
                                var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');
                                elem.scrollTop = elem.scrollHeight;
                            });
                            addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {
                                event.preventDefault();

                                toggleClass(this.parentNode, 'hover');
                            });

                            var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');
                            if (null !== dumpInfo) {
                                addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {
                                    dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';
                                });
                                addEventListener(dumpInfo, 'mouseleave', function () {
                                    dumpInfo.style.minHeight = '';
                                });
                            }
                        },
                        function(xhr) {
                            if (xhr.status !== 0 && !options.stop) {
                                var sfwdt = that.getSfwdt(token);
                                sfwdt.innerHTML = '\\
                                <div class=\"sf-toolbarreset notranslate\">\\
                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\
                                    An error occurred while loading the web debug toolbar. <a href=\"";
        // line 600
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_profiler_home"), "js"), "html", null, true);
        yield "' + newToken + '\">Open the web profiler.</a>\\
                                </div>\\
                            ';
                                sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');
                            }
                        },
                        options
                    );

                    return this;
                },

                toggle: function(selector, elOn, elOff) {
                    var tmp = elOn.style.display,
                        el = document.getElementById(selector);

                    elOn.style.display = elOff.style.display;
                    elOff.style.display = tmp;

                    if (el) {
                        el.style.display = 'none' === tmp ? 'none' : 'block';
                    }

                    return this;
                },
            };
        })();
    }

    Sfjs.loadToolbar('";
        // line 629
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 629, $this->source); })()), "html", null, true);
        yield "');
/*]]>*/</script>
<!-- END of Symfony Web Debug Toolbar -->
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Profiler/toolbar_js.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  722 => 629,  690 => 600,  604 => 517,  482 => 397,  450 => 368,  444 => 365,  440 => 364,  434 => 361,  430 => 360,  384 => 317,  363 => 298,  361 => 297,  74 => 18,  63 => 13,  58 => 10,  56 => 8,  55 => 3,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!-- START of Symfony Web Debug Toolbar -->
<div id=\"sfwdt{{ token }}\" class=\"sf-toolbar sf-toolbar-opened\" role=\"region\" aria-label=\"Symfony Web Debug Toolbar\">
    {{ include('@WebProfiler/Profiler/toolbar.html.twig', {
        templates: {
            'request': '@WebProfiler/Profiler/cancel.html.twig'
        },
        profile: null,
        profiler_url: url('_profiler', {token: token}),
        profiler_markup_version: 3,
    }) }}
</div>

<link rel=\"stylesheet\"{% if csp_style_nonce %} nonce=\"{{ csp_style_nonce }}\"{% endif %} href=\"{{ url('_wdt_stylesheet') }}\" />

{# CAUTION: the contents of this file are processed by Twig before loading
            them as JavaScript source code. Always use '/*' comments instead
            of '//' comments to avoid impossible-to-debug side-effects #}
<script{% if csp_script_nonce is defined and csp_script_nonce %} nonce=\"{{ csp_script_nonce }}\"{% endif %}>/*<![CDATA[*/
    if (typeof Sfjs === 'undefined' || typeof Sfjs.loadToolbar === 'undefined') {
        Sfjs = (function() {
            \"use strict\";

            if ('classList' in document.documentElement) {
                var hasClass = function (el, cssClass) { return el.classList.contains(cssClass); };
                var removeClass = function(el, cssClass) { el.classList.remove(cssClass); };
                var addClass = function(el, cssClass) { el.classList.add(cssClass); };
                var toggleClass = function(el, cssClass) { el.classList.toggle(cssClass); };
            } else {
                var hasClass = function (el, cssClass) { return el.className.match(new RegExp('\\\\b' + cssClass + '\\\\b')); };
                var removeClass = function(el, cssClass) { el.className = el.className.replace(new RegExp('\\\\b' + cssClass + '\\\\b'), ' '); };
                var addClass = function(el, cssClass) { if (!hasClass(el, cssClass)) { el.className += \" \" + cssClass; } };
                var toggleClass = function(el, cssClass) { hasClass(el, cssClass) ? removeClass(el, cssClass) : addClass(el, cssClass); };
            }

            var noop = function() {};

            var profilerStorageKey = 'symfony/profiler/';

            var addEventListener;

            var el = document.createElement('div');
            if (!('addEventListener' in el)) {
                addEventListener = function (element, eventName, callback) {
                    element.attachEvent('on' + eventName, callback);
                };
            } else {
                addEventListener = function (element, eventName, callback) {
                    element.addEventListener(eventName, callback, false);
                };
            }

            var request = function(url, onSuccess, onError, payload, options, tries) {
                url = new URL(url);
                url.searchParams.set('XDEBUG_IGNORE', '1');
                url = url.toString();
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                options.retry = options.retry || false;
                tries = tries || 1;
                /* this delays for 125, 375, 625, 875, and 1000, ... */
                var delay = tries < 5 ? (tries - 0.5) * 250 : 1000;

                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 !== xhr.readyState) {
                        return null;
                    }

                    if (xhr.status == 404 && options.retry && !options.stop) {
                        setTimeout(function() {
                            if (options.stop) {
                                return;
                            }
                            request(url, onSuccess, onError, payload, options, tries + 1);
                        }, delay);

                        return null;
                    }

                    if (200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else {
                        (onError || noop)(xhr);
                    }
                };

                if (options.onSend) {
                    options.onSend(tries);
                }

                xhr.send(payload || '');
            };

            var getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            };

            var setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

            var requestStack = [];

            var extractHeaders = function(xhr, stackElement) {
                /* Here we avoid to call xhr.getResponseHeader in order to */
                /* prevent polluting the console with CORS security errors */
                var allHeaders = xhr.getAllResponseHeaders();
                var ret;

                if (ret = allHeaders.match(/^x-debug-token:\\s+(.*)\$/im)) {
                    stackElement.profile = ret[1];
                }
                if (ret = allHeaders.match(/^x-debug-token-link:\\s+(.*)\$/im)) {
                    stackElement.profilerUrl = ret[1];
                }
                if (ret = allHeaders.match(/^Symfony-Debug-Toolbar-Replace:\\s+(.*)\$/im)) {
                    stackElement.toolbarReplaceFinished = false;
                    stackElement.toolbarReplace = '1' === ret[1];
                }
            };

            var successStreak = 4;
            var pendingRequests = 0;
            var renderAjaxRequests = function() {
                var requestCounter = document.querySelector('.sf-toolbar-ajax-request-counter');
                if (!requestCounter) {
                    return;
                }
                requestCounter.textContent = requestStack.length;

                var infoSpan = document.querySelector(\".sf-toolbar-ajax-info\");
                if (infoSpan) {
                    infoSpan.textContent = requestStack.length + ' AJAX request' + (requestStack.length !== 1 ? 's' : '');
                }

                var ajaxToolbarPanel = document.querySelector('.sf-toolbar-block-ajax');
                if (requestStack.length) {
                    ajaxToolbarPanel.style.display = '';
                } else {
                    ajaxToolbarPanel.style.display = 'none';
                }
                if (pendingRequests > 0) {
                    addClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                } else if (successStreak < 4) {
                    addClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                    removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                } else {
                    removeClass(ajaxToolbarPanel, 'sf-ajax-request-loading');
                    removeClass(ajaxToolbarPanel, 'sf-toolbar-status-red');
                }
            };

            var startAjaxRequest = function(index) {
                var tbody = document.querySelector('.sf-toolbar-ajax-request-list');
                if (!tbody) {
                    return;
                }

                var nbOfAjaxRequest = tbody.rows.length;
                if (nbOfAjaxRequest >= 100) {
                    tbody.deleteRow(0);
                }

                var request = requestStack[index];
                pendingRequests++;
                var row = document.createElement('tr');
                request.DOMNode = row;

                var requestNumberCell = document.createElement('td');
                requestNumberCell.textContent = index + 1;
                row.appendChild(requestNumberCell);

                var profilerCell = document.createElement('td');
                profilerCell.textContent = 'n/a';
                row.appendChild(profilerCell);

                var methodCell = document.createElement('td');
                methodCell.textContent = request.method;
                row.appendChild(methodCell);

                var typeCell = document.createElement('td');
                typeCell.textContent = request.type;
                row.appendChild(typeCell);

                var statusCodeCell = document.createElement('td');
                var statusCode = document.createElement('span');
                statusCode.textContent = 'n/a';
                statusCodeCell.appendChild(statusCode);
                row.appendChild(statusCodeCell);

                var pathCell = document.createElement('td');
                pathCell.className = 'sf-ajax-request-url';
                if ('GET' === request.method) {
                    var pathLink = document.createElement('a');
                    pathLink.setAttribute('href', request.url);
                    pathLink.textContent = request.url;
                    pathCell.appendChild(pathLink);
                } else {
                    pathCell.textContent = request.url;
                }
                pathCell.setAttribute('title', request.url);
                row.appendChild(pathCell);

                var durationCell = document.createElement('td');
                durationCell.className = 'sf-ajax-request-duration';
                durationCell.textContent = 'n/a';
                row.appendChild(durationCell);

                request.liveDurationHandle = setInterval(function() {
                    durationCell.textContent = (new Date() - request.start) + ' ms';
                }, 100);

                row.className = 'sf-ajax-request sf-ajax-request-loading';
                tbody.insertBefore(row, null);

                var toolbarInfo = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');
                toolbarInfo.scrollTop = toolbarInfo.scrollHeight;

                renderAjaxRequests();
            };

            var finishAjaxRequest = function(index) {
                var request = requestStack[index];
                clearInterval(request.liveDurationHandle);

                if (!request.DOMNode) {
                    return;
                }

                if (request.toolbarReplace && !request.toolbarReplaceFinished && request.profile) {
                    /* Flag as complete because finishAjaxRequest can be called multiple times. */
                    request.toolbarReplaceFinished = true;
                    /* Search up through the DOM to find the toolbar's container ID. */
                    for (var elem = request.DOMNode; elem && elem !== document; elem = elem.parentNode) {
                        if (elem.id.match(/^sfwdt/)) {
                            Sfjs.loadToolbar(elem.id.replace(/^sfwdt/, ''), request.profile);
                            break;
                        }
                    }
                }

                pendingRequests--;
                var row = request.DOMNode;
                /* Unpack the children from the row */
                var profilerCell = row.children[1];
                var methodCell = row.children[2];
                var statusCodeCell = row.children[4];
                var statusCodeElem = statusCodeCell.children[0];
                var durationCell = row.children[6];

                if (request.error) {
                    row.className = 'sf-ajax-request sf-ajax-request-error';
                    methodCell.className = 'sf-ajax-request-error';
                    successStreak = 0;
                } else {
                    row.className = 'sf-ajax-request sf-ajax-request-ok';
                    successStreak++;
                }

                if (request.statusCode) {
                    if (request.statusCode < 300) {
                        statusCodeElem.setAttribute('class', 'sf-toolbar-status');
                    } else if (request.statusCode < 400) {
                        statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-yellow');
                    } else {
                        statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
                    }
                    statusCodeElem.textContent = request.statusCode;
                } else {
                    statusCodeElem.setAttribute('class', 'sf-toolbar-status sf-toolbar-status-red');
                }

                if (request.duration) {
                    durationCell.textContent = request.duration + ' ms';
                }

                if (request.profilerUrl) {
                    profilerCell.textContent = '';
                    var profilerLink = document.createElement('a');
                    profilerLink.setAttribute('href', request.profilerUrl);
                    profilerLink.textContent = request.profile;
                    profilerCell.appendChild(profilerLink);
                }

                renderAjaxRequests();
            };

            {% if excluded_ajax_paths is defined %}
            if (window.fetch && window.fetch.polyfill === undefined) {
                var oldFetch = window.fetch;
                window.fetch = function () {
                    var promise = oldFetch.apply(this, arguments);
                    var url = arguments[0];
                    var params = arguments[1];
                    var paramType = Object.prototype.toString.call(arguments[0]);
                    if (paramType === '[object Request]') {
                        url = arguments[0].url;
                        params = {
                            method: arguments[0].method,
                            credentials: arguments[0].credentials,
                            headers: arguments[0].headers,
                            mode: arguments[0].mode,
                            redirect: arguments[0].redirect
                        };
                    } else {
                        url = String(url);
                    }
                    if (!url.match(new RegExp({{ excluded_ajax_paths|json_encode|raw }}))) {
                        var method = 'GET';
                        if (params && params.method !== undefined) {
                            method = params.method;
                        }

                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'fetch',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;
                        promise.then(function (r) {
                            stackElement.duration = new Date() - stackElement.start;
                            stackElement.error = r.status < 200 || r.status >= 400;
                            stackElement.statusCode = r.status;
                            stackElement.profile = r.headers.get('x-debug-token');
                            stackElement.profilerUrl = r.headers.get('x-debug-token-link');
                            stackElement.toolbarReplaceFinished = false;
                            stackElement.toolbarReplace = '1' === r.headers.get('Symfony-Debug-Toolbar-Replace');
                            finishAjaxRequest(idx);
                        }, function (e){
                            stackElement.error = true;
                            finishAjaxRequest(idx);
                        });
                        startAjaxRequest(idx);
                    }

                    return promise;
                };
            }
            if (window.XMLHttpRequest && XMLHttpRequest.prototype.addEventListener) {
                var proxied = XMLHttpRequest.prototype.open;

                XMLHttpRequest.prototype.open = function(method, url, async, user, pass) {
                    var self = this;

                    /* prevent logging AJAX calls to static and inline files, like templates */
                    var path = url;
                    if (url.slice(0, 1) === '/') {
                        if (0 === url.indexOf('{{ request.basePath|e('js') }}')) {
                            path = url.slice({{ request.basePath|length }});
                        }
                    }
                    else if (0 === url.indexOf('{{ (request.schemeAndHttpHost ~ request.basePath)|e('js') }}')) {
                        path = url.slice({{ (request.schemeAndHttpHost ~ request.basePath)|length }});
                    }

                    if (!path.match(new RegExp({{ excluded_ajax_paths|json_encode|raw }}))) {
                        var stackElement = {
                            error: false,
                            url: url,
                            method: method,
                            type: 'xhr',
                            start: new Date()
                        };

                        var idx = requestStack.push(stackElement) - 1;

                        this.addEventListener('readystatechange', function() {
                            if (self.readyState == 4) {
                                stackElement.duration = new Date() - stackElement.start;
                                stackElement.error = self.status < 200 || self.status >= 400;
                                stackElement.statusCode = self.status;
                                extractHeaders(self, stackElement);

                                finishAjaxRequest(idx);
                            }
                        }, false);

                        startAjaxRequest(idx);
                    }

                    proxied.apply(this, Array.prototype.slice.call(arguments));
                };
            }
            {% endif %}

            return {
                hasClass: hasClass,

                removeClass: removeClass,

                addClass: addClass,

                toggleClass: toggleClass,

                getPreference: getPreference,

                setPreference: setPreference,

                addEventListener: addEventListener,

                request: request,

                renderAjaxRequests: renderAjaxRequests,

                getSfwdt: function(token) {
                    if (!this.sfwdt) {
                        this.sfwdt = document.getElementById('sfwdt' + token);
                    }

                    return this.sfwdt;
                },

                load: function(selector, url, onSuccess, onError, options) {
                    var el = document.getElementById(selector);

                    if (el && el.getAttribute('data-sfurl') !== url) {
                        request(
                            url,
                            function(xhr) {
                                el.innerHTML = xhr.responseText;
                                el.setAttribute('data-sfurl', url);
                                removeClass(el, 'loading');
                                var pending = pendingRequests;
                                for (var i = 0; i < requestStack.length; i++) {
                                    startAjaxRequest(i);
                                    if (requestStack[i].duration) {
                                        finishAjaxRequest(i);
                                    }
                                }
                                /* Revert the pending state in case there was a start called without a finish above. */
                                pendingRequests = pending;
                                (onSuccess || noop)(xhr, el);
                            },
                            function(xhr) { (onError || noop)(xhr, el); },
                            '',
                            options
                        );
                    }

                    return this;
                },

                showToolbar: function(token) {
                    var sfwdt = this.getSfwdt(token);

                    if ('closed' === getPreference('toolbar/displayState')) {
                        addClass(sfwdt, 'sf-toolbar-closed');
                        removeClass(sfwdt, 'sf-toolbar-opened');
                    } else {
                        addClass(sfwdt, 'sf-toolbar-opened');
                        removeClass(sfwdt, 'sf-toolbar-closed');
                    }
                },

                hideToolbar: function(token) {
                    var sfwdt = this.getSfwdt(token);
                    addClass(sfwdt, 'sf-toolbar-closed');
                    removeClass(sfwdt, 'sf-toolbar-opened');
                },

                initToolbar: function(token) {
                    this.showToolbar(token);

                    var toggleButton = document.querySelector(`#sfToolbarToggleButton-\${token}`);
                    addEventListener(toggleButton, 'click', function (event) {
                        event.preventDefault();

                        const newState = 'opened' === getPreference('toolbar/displayState') ? 'closed' : 'opened';
                        setPreference('toolbar/displayState', newState);
                        'opened' === newState ? Sfjs.showToolbar(token) : Sfjs.hideToolbar(token);
                    });
                },

                loadToolbar: function(token, newToken) {
                    var that = this;
                    var triesCounter = document.getElementById('sfLoadCounter-' + token);

                    var options = {
                        retry: true,
                        onSend: function (count) {
                            if (count === 3) {
                                that.initToolbar(token);
                            }

                            if (triesCounter) {
                                triesCounter.textContent = count;
                            }
                        },
                    };

                    var cancelButton = document.getElementById('sfLoadCancel-' + token);
                    if (cancelButton) {
                        addEventListener(cancelButton, 'click', function (event) {
                            event.preventDefault();

                            options.stop = true;
                            that.hideToolbar(token);
                        });
                    }

                    newToken = (newToken || token);

                    this.load(
                        'sfwdt' + token,
                        '{{ url(\"_wdt\", { \"token\": \"xxxxxx\" })|escape('js') }}'.replace(/xxxxxx/, newToken),
                        function(xhr, el) {
                            /* Do nothing in the edge case where the toolbar has already been replaced with a new one */
                            if (!document.getElementById('sfToolbarMainContent-' + newToken)) {
                                return;
                            }

                            /* Evaluate in global scope scripts embedded inside the toolbar */
                            var i, scripts = [].slice.call(el.querySelectorAll('script'));
                            for (i = 0; i < scripts.length; ++i) {
                                if (scripts[i].firstChild) {
                                    eval.call({}, scripts[i].firstChild.nodeValue);
                                }
                            }

                            el.style.display = -1 !== xhr.responseText.indexOf('sf-toolbarreset') ? 'block' : 'none';

                            if (el.style.display == 'none') {
                                return;
                            }

                            that.initToolbar(newToken);

                            /* Handle toolbar-info position */
                            var toolbarBlocks = [].slice.call(el.querySelectorAll('.sf-toolbar-block'));
                            for (i = 0; i < toolbarBlocks.length; ++i) {
                                toolbarBlocks[i].onmouseover = function () {
                                    var toolbarInfo = this.querySelectorAll('.sf-toolbar-info')[0];
                                    var pageWidth = document.body.clientWidth;
                                    var elementWidth = toolbarInfo.offsetWidth;
                                    var leftValue = (elementWidth + this.offsetLeft) - pageWidth;
                                    var rightValue = (elementWidth + (pageWidth - this.offsetLeft)) - pageWidth;

                                    /* Reset right and left value, useful on window resize */
                                    toolbarInfo.style.right = '';
                                    toolbarInfo.style.left = '';

                                    if (elementWidth > pageWidth) {
                                        toolbarInfo.style.left = 0;
                                    }
                                    else if (leftValue > 0 && rightValue > 0) {
                                        toolbarInfo.style.right = (rightValue * -1) + 'px';
                                    } else if (leftValue < 0) {
                                        toolbarInfo.style.left = 0;
                                    } else {
                                        toolbarInfo.style.right = '0px';
                                    }
                                };
                            }

                            renderAjaxRequests();
                            addEventListener(document.querySelector('.sf-toolbar-ajax-clear'), 'click', function() {
                                requestStack = [];
                                renderAjaxRequests();
                                successStreak = 4;
                                document.querySelector('.sf-toolbar-ajax-request-list').innerHTML = '';
                            });
                            addEventListener(document.querySelector('.sf-toolbar-block-ajax'), 'mouseenter', function (event) {
                                var elem = document.querySelector('.sf-toolbar-block-ajax .sf-toolbar-info');
                                elem.scrollTop = elem.scrollHeight;
                            });
                            addEventListener(document.querySelector('.sf-toolbar-block-ajax > .sf-toolbar-icon'), 'click', function (event) {
                                event.preventDefault();

                                toggleClass(this.parentNode, 'hover');
                            });

                            var dumpInfo = document.querySelector('.sf-toolbar-block-dump .sf-toolbar-info');
                            if (null !== dumpInfo) {
                                addEventListener(dumpInfo, 'sfbeforedumpcollapse', function () {
                                    dumpInfo.style.minHeight = dumpInfo.getBoundingClientRect().height+'px';
                                });
                                addEventListener(dumpInfo, 'mouseleave', function () {
                                    dumpInfo.style.minHeight = '';
                                });
                            }
                        },
                        function(xhr) {
                            if (xhr.status !== 0 && !options.stop) {
                                var sfwdt = that.getSfwdt(token);
                                sfwdt.innerHTML = '\\
                                <div class=\"sf-toolbarreset notranslate\">\\
                                    <div class=\"sf-toolbar-icon\"><svg width=\"26\" height=\"28\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 26 28\" enable-background=\"new 0 0 26 28\" xml:space=\"preserve\"><path fill=\"#FFFFFF\" d=\"M13 0C5.8 0 0 5.8 0 13c0 7.2 5.8 13 13 13c7.2 0 13-5.8 13-13C26 5.8 20.2 0 13 0z M20 7.5 c-0.6 0-1-0.3-1-0.9c0-0.2 0-0.4 0.2-0.6c0.1-0.3 0.2-0.3 0.2-0.4c0-0.3-0.5-0.4-0.7-0.4c-2 0.1-2.5 2.7-2.9 4.8l-0.2 1.1 c1.1 0.2 1.9 0 2.4-0.3c0.6-0.4-0.2-0.8-0.1-1.3C18 9.2 18.4 9 18.7 8.9c0.5 0 0.8 0.5 0.8 1c0 0.8-1.1 2-3.3 1.9 c-0.3 0-0.5 0-0.7-0.1L15 14.1c-0.4 1.7-0.9 4.1-2.6 6.2c-1.5 1.8-3.1 2.1-3.8 2.1c-1.3 0-2.1-0.6-2.2-1.6c0-0.9 0.8-1.4 1.3-1.4 c0.7 0 1.2 0.5 1.2 1.1c0 0.5-0.2 0.6-0.4 0.7c-0.1 0.1-0.3 0.2-0.3 0.4c0 0.1 0.1 0.3 0.4 0.3c0.5 0 0.9-0.3 1.2-0.5 c1.3-1 1.7-2.9 2.4-6.2l0.1-0.8c0.2-1.1 0.5-2.3 0.8-3.5c-0.9-0.7-1.4-1.5-2.6-1.8c-0.8-0.2-1.3 0-1.7 0.4C8.4 10 8.6 10.7 9 11.1 l0.7 0.7c0.8 0.9 1.3 1.7 1.1 2.7c-0.3 1.6-2.1 2.8-4.3 2.1c-1.9-0.6-2.2-1.9-2-2.7c0.2-0.6 0.7-0.8 1.2-0.6 c0.5 0.2 0.7 0.8 0.6 1.3c0 0.1 0 0.1-0.1 0.3C6 15 5.9 15.2 5.9 15.3c-0.1 0.4 0.4 0.7 0.8 0.8c0.8 0.3 1.7-0.2 1.9-0.9 c0.2-0.6-0.2-1.1-0.4-1.2l-0.8-0.9c-0.4-0.4-1.2-1.5-0.8-2.8c0.2-0.5 0.5-1 0.9-1.4c1-0.7 2-0.8 3-0.6c1.3 0.4 1.9 1.2 2.8 1.9 c0.5-1.3 1.1-2.6 2-3.8c0.9-1 2-1.7 3.3-1.8C20 4.8 21 5.4 21 6.3C21 6.7 20.8 7.5 20 7.5z\"/></svg></div>\\
                                    An error occurred while loading the web debug toolbar. <a href=\"{{ url(\"_profiler_home\")|escape('js') }}' + newToken + '\">Open the web profiler.</a>\\
                                </div>\\
                            ';
                                sfwdt.setAttribute('class', 'sf-toolbar sf-error-toolbar');
                            }
                        },
                        options
                    );

                    return this;
                },

                toggle: function(selector, elOn, elOff) {
                    var tmp = elOn.style.display,
                        el = document.getElementById(selector);

                    elOn.style.display = elOff.style.display;
                    elOff.style.display = tmp;

                    if (el) {
                        el.style.display = 'none' === tmp ? 'none' : 'block';
                    }

                    return this;
                },
            };
        })();
    }

    Sfjs.loadToolbar('{{ token }}');
/*]]>*/</script>
<!-- END of Symfony Web Debug Toolbar -->
", "@WebProfiler/Profiler/toolbar_js.html.twig", "/var/www/symfony/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/toolbar_js.html.twig");
    }
}
