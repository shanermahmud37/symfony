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

/* @WebProfiler/Collector/workflow.html.twig */
class __TwigTemplate_a9e1e48c175a107580cce88d7a5ee8a9 extends Template
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

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/workflow.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/workflow.html.twig"));

        $this->parent = $this->load("@WebProfiler/Profiler/layout.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <style>
        :root {
            --workflow-dialog-background: var(--gray-200);
        }
        .theme-dark {
            --workflow-dialog-background: var(--gray-900);
        }

        dialog {
            background: var(--workflow-dialog-background);
            border: none;
            border-radius: 6px;
            box-shadow: var(--settings-modal-shadow);
            max-width: 94%;
            width: 1200px;
        }

        dialog::backdrop {
            background: linear-gradient(
                45deg,
                rgb(18, 18, 20, 0.4),
                rgb(17, 17, 20, 0.8)
            );
        }

        dialog[open] {
            animation: scale 0.3s ease normal;
        }

        dialog[open]::backdrop {
            animation: backdrop 0.3s ease normal;
        }

        dialog.hide {
            animation-direction: reverse;
        }

        dialog h2 {
            box-shadow: none !important;
            color: var(--page-color);
            font-size: 18px;
            margin: 0 0 .5em;
        }

        dialog i.cancel {
            cursor: pointer;
            padding: 0 5px;
            float: right;
        }

        dialog table {
            background: var(--page-background);
            border-collapse: collapse;
            border-radius: 4px;
            box-shadow: inset 0 0 0 1px var(--table-border-color);
            color: var(--page-color);
            margin: 0 0 1em 0;
            margin-bottom: 1em;
            padding: 0;
        }

        dialog table tr {
            border: 1px solid var(--table-border-color);
            padding: .35em;
        }

        dialog table th,
        dialog table td {
            border: 1px solid var(--table-border-color);
            padding: .625em;
            text-align: left;
            word-wrap: break-word;
        }

        dialog table thead th {
            background: var(--table-header);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            font-size: .85em;
        }

        dialog menu {
            display: none;
        }

        @keyframes scale {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }

        @keyframes backdrop {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 102
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_toolbar(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 103
        yield "    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 103, $this->source); })()), "callsCount", [], "any", false, false, false, 103) > 0)) {
            // line 104
            yield "        ";
            $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 105
                yield "            ";
                yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/workflow.svg");
                yield "
            <span class=\"sf-toolbar-value\">";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "callsCount", [], "any", false, false, false, 106), "html", null, true);
                yield "</span>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 108
            yield "        ";
            $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                // line 109
                yield "            <div class=\"sf-toolbar-info-piece\">
                <b>Workflow Calls</b>
                <span>";
                // line 111
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 111, $this->source); })()), "callsCount", [], "any", false, false, false, 111), "html", null, true);
                yield "</span>
            </div>
        ";
                yield from [];
            })())) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 114
            yield "
        ";
            // line 115
            yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => (isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 115, $this->source); })())]);
            yield "
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 119
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_menu(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 120
        yield "    <span class=\"label ";
        yield (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "workflows", [], "any", false, false, false, 120)) == 0)) ? ("disabled") : (""));
        yield "\">
        <span class=\"icon\">
            ";
        // line 122
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/workflow.svg");
        yield "
        </span>
        <strong>Workflow</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 128
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_panel(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 129
        yield "    <h2>Workflow</h2>

    ";
        // line 131
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 131, $this->source); })()), "workflows", [], "any", false, false, false, 131)) == 0)) {
            // line 132
            yield "        <div class=\"empty empty-panel\">
            <p>There are no workflows configured.</p>
        </div>
    ";
        } else {
            // line 136
            yield "        <script>
            ";
            // line 137
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Script/Mermaid/mermaid-flowchart-v2.min.js");
            yield "
            const isDarkMode = document.querySelector('body').classList.contains('theme-dark');
            mermaid.initialize({
                flowchart: {
                    useMaxWidth: true,
                },
                securityLevel: 'loose',
                theme: 'base',
                themeVariables: {
                    darkMode: isDarkMode,
                    fontFamily: 'var(--font-family-system)',
                    fontSize: 'var(--font-size-body)',
                    // the properties below don't support CSS variables
                    primaryColor: isDarkMode ? 'lightsteelblue' : 'aliceblue',
                    primaryTextColor: isDarkMode ? '#000' : '#000',
                    primaryBorderColor: isDarkMode ? 'steelblue' : 'lightsteelblue',
                    lineColor: isDarkMode ? '#939393' : '#d4d4d4',
                    secondaryColor: isDarkMode ? 'lightyellow' : 'lightyellow',
                    tertiaryColor: isDarkMode ? 'lightSalmon' : 'lightSalmon',
                }
            });

            ";
            // line 159
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 159, $this->source); })()), "workflows", [], "any", false, false, false, 159));
            foreach ($context['_seq'] as $context["name"] => $context["data"]) {
                // line 160
                yield "                window.showNodeDetails";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 160, $this->source); })()), "hash", [$context["name"]], "method", false, false, false, 160), "html", null, true);
                yield " = function (node) {
                    const map = ";
                // line 161
                yield json_encode(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "listeners", [], "any", false, false, false, 161));
                yield ";
                    showNodeDetails(node, map);
                };
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            yield "
            const showNodeDetails = function (node, map) {
                const dialog = document.getElementById('detailsDialog');

                dialog.querySelector('tbody').innerHTML = '';
                for (const [eventName, listeners] of Object.entries(map[node])) {
                    listeners.forEach(listener => {
                        const row = document.createElement('tr');

                        const eventNameCode = document.createElement('code');
                        eventNameCode.textContent = eventName;

                        const eventNameCell = document.createElement('td');
                        eventNameCell.appendChild(eventNameCode);
                        row.appendChild(eventNameCell);

                        const listenerDetailsCell = document.createElement('td');
                        row.appendChild(listenerDetailsCell);

                        let listenerDetails;
                        const listenerDetailsCode = document.createElement('code');
                        listenerDetailsCode.textContent = listener.title;
                        if (listener.file) {
                            const link = document.createElement('a');
                            link.href = listener.file;
                            link.appendChild(listenerDetailsCode);
                            listenerDetails = link;
                        } else {
                            listenerDetails = listenerDetailsCode;
                        }
                        listenerDetailsCell.appendChild(listenerDetails);

                        if (typeof listener.guardExpressions === 'object') {
                            listenerDetailsCell.appendChild(document.createElement('br'));

                            const guardExpressionsWrapper = document.createElement('span');
                            guardExpressionsWrapper.appendChild(document.createTextNode('guard expressions: '));

                            listener.guardExpressions.forEach((expression, index) => {
                                if (index > 0) {
                                    guardExpressionsWrapper.appendChild(document.createTextNode(', '));
                                }

                                const expressionCode = document.createElement('code');
                                expressionCode.textContent = expression;
                                guardExpressionsWrapper.appendChild(expressionCode);
                            });

                            listenerDetailsCell.appendChild(guardExpressionsWrapper);
                        }

                        dialog.querySelector('tbody').appendChild(row);
                    });
                };

                if (dialog.dataset.processed) {
                    dialog.showModal();
                    return;
                }

                dialog.addEventListener('click', (e) => {
                    const rect = dialog.getBoundingClientRect();

                    const inDialog =
                        rect.top <= e.clientY &&
                        e.clientY <= rect.top + rect.height &&
                        rect.left <= e.clientX &&
                        e.clientX <= rect.left + rect.width;

                    !inDialog && dialog.close();
                });

                dialog.querySelectorAll('.cancel').forEach(elt => {
                    elt.addEventListener('click', () => dialog.close());
                });

                dialog.showModal();

                dialog.dataset.processed = true;
            };
            // We do not load all mermaid diagrams at once, but only when the tab is opened
            // This is because mermaid diagrams are in a tab, and cannot be renderer with a
            // \"good size\" if they are not visible
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.tab').forEach((el) => {
                    const observer = new MutationObserver(() => {
                        if (!el.classList.contains('block')) {
                            return;
                        }
                        const mEl = el.querySelector('.sf-mermaid');
                        if (mEl.dataset.processed) {
                            return;
                        }
                        mermaid.run({
                            nodes: [mEl],
                        });
                    });
                    observer.observe(el, { attributeFilter: ['class'] });
                });
            });
        </script>

        <div class=\"sf-tabs js-tabs\">
            ";
            // line 268
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 268, $this->source); })()), "workflows", [], "any", false, false, false, 268));
            foreach ($context['_seq'] as $context["name"] => $context["data"]) {
                // line 269
                yield "                <div class=\"tab\">
                    <h2 class=\"tab-title\">";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                if ((($tmp = Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["data"], "calls", [], "any", false, false, false, 270))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                    yield " (";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["data"], "calls", [], "any", false, false, false, 270)), "html", null, true);
                    yield ")";
                }
                yield "</h2>

                    <div class=\"tab-content\">
                        <h3>Definition</h3>
                        <pre class=\"sf-mermaid\">
                            ";
                // line 275
                yield CoreExtension::getAttribute($this->env, $this->source, $context["data"], "dump", [], "any", false, false, false, 275);
                yield "
                            ";
                // line 276
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "listeners", [], "any", false, false, false, 276));
                foreach ($context['_seq'] as $context["nodeId"] => $context["events"]) {
                    // line 277
                    yield "                                click ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["nodeId"], "html", null, true);
                    yield " showNodeDetails";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 277, $this->source); })()), "hash", [$context["name"]], "method", false, false, false, 277), "html", null, true);
                    yield "
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['nodeId'], $context['events'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 279
                yield "                        </pre>
                        <a href=\"";
                // line 280
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 280, $this->source); })()), "buildMermaidLiveLink", [$context["name"]], "method", false, false, false, 280), "html", null, true);
                yield "\">View on mermaid.live</a>

                        <h3>Calls</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Call</th>
                                    <th>Args</th>
                                    <th>Return</th>
                                    <th>Exception</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
                // line 295
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["data"], "calls", [], "any", false, false, false, 295));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["call"]) {
                    // line 296
                    yield "                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">";
                    // line 297
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 297), "html", null, true);
                    yield "</td>
                                        <td>
                                            <code>";
                    // line 299
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["call"], "method", [], "any", false, false, false, 299), "html", null, true);
                    yield "()</code>
                                            ";
                    // line 300
                    if ((($tmp = (((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "previousMarking", [], "any", true, true, false, 300) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["call"], "previousMarking", [], "any", false, false, false, 300)))) ? (CoreExtension::getAttribute($this->env, $this->source, $context["call"], "previousMarking", [], "any", false, false, false, 300)) : (null))) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                        // line 301
                        yield "                                                <hr />
                                                Previous marking:
                                                ";
                        // line 303
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "previousMarking", [], "any", false, false, false, 303));
                        yield "
                                            ";
                    }
                    // line 305
                    yield "                                        </td>
                                        <td>
                                            ";
                    // line 307
                    yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "args", [], "any", false, false, false, 307));
                    yield "
                                        </td>
                                        <td>
                                            ";
                    // line 310
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["call"], "return", [], "any", true, true, false, 310)) {
                        // line 311
                        yield "                                                ";
                        if ((CoreExtension::getAttribute($this->env, $this->source, $context["call"], "return", [], "any", false, false, false, 311) === true)) {
                            // line 312
                            yield "                                                    <code>true</code>
                                                ";
                        } elseif ((CoreExtension::getAttribute($this->env, $this->source,                         // line 313
$context["call"], "return", [], "any", false, false, false, 313) === false)) {
                            // line 314
                            yield "                                                    <code>false</code>
                                                ";
                        } else {
                            // line 316
                            yield "                                                    ";
                            yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "return", [], "any", false, false, false, 316));
                            yield "
                                                ";
                        }
                        // line 318
                        yield "                                            ";
                    }
                    // line 319
                    yield "                                        </td>
                                        <td>
                                            ";
                    // line 321
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["call"], "exception", [], "any", true, true, false, 321)) {
                        // line 322
                        yield "                                                ";
                        yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["call"], "exception", [], "any", false, false, false, 322));
                        yield "
                                            ";
                    }
                    // line 324
                    yield "                                        </td>
                                        <td>
                                            ";
                    // line 326
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::sprintf("%0.2f ms", CoreExtension::getAttribute($this->env, $this->source, $context["call"], "duration", [], "any", false, false, false, 326)), "html", null, true);
                    yield "
                                        </td>
                                    </tr>
                                ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['call'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 330
                yield "                            </tbody>
                        </table>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['name'], $context['data'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 335
            yield "        </div>
    ";
        }
        // line 337
        yield "
    <dialog id=\"detailsDialog\">
        <h2>
            Event listeners
            <i class=\"cancel\">×</i>
        </h2>

        <table>
            <thead>
                <tr>
                    <th>event</th>
                    <th>listener</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <menu>
            <small><i>⌨</i> <kbd>esc</kbd></small>
            <button class=\"btn btn-sm cancel\">Close</button>
        </menu>
    </dialog>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@WebProfiler/Collector/workflow.html.twig";
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
        return array (  642 => 337,  638 => 335,  628 => 330,  610 => 326,  606 => 324,  600 => 322,  598 => 321,  594 => 319,  591 => 318,  585 => 316,  581 => 314,  579 => 313,  576 => 312,  573 => 311,  571 => 310,  565 => 307,  561 => 305,  556 => 303,  552 => 301,  550 => 300,  546 => 299,  541 => 297,  538 => 296,  521 => 295,  503 => 280,  500 => 279,  489 => 277,  485 => 276,  481 => 275,  468 => 270,  465 => 269,  461 => 268,  356 => 165,  346 => 161,  341 => 160,  337 => 159,  312 => 137,  309 => 136,  303 => 132,  301 => 131,  297 => 129,  284 => 128,  268 => 122,  262 => 120,  249 => 119,  235 => 115,  232 => 114,  225 => 111,  221 => 109,  218 => 108,  212 => 106,  207 => 105,  204 => 104,  201 => 103,  188 => 102,  79 => 4,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block stylesheets %}
    {{ parent() }}
    <style>
        :root {
            --workflow-dialog-background: var(--gray-200);
        }
        .theme-dark {
            --workflow-dialog-background: var(--gray-900);
        }

        dialog {
            background: var(--workflow-dialog-background);
            border: none;
            border-radius: 6px;
            box-shadow: var(--settings-modal-shadow);
            max-width: 94%;
            width: 1200px;
        }

        dialog::backdrop {
            background: linear-gradient(
                45deg,
                rgb(18, 18, 20, 0.4),
                rgb(17, 17, 20, 0.8)
            );
        }

        dialog[open] {
            animation: scale 0.3s ease normal;
        }

        dialog[open]::backdrop {
            animation: backdrop 0.3s ease normal;
        }

        dialog.hide {
            animation-direction: reverse;
        }

        dialog h2 {
            box-shadow: none !important;
            color: var(--page-color);
            font-size: 18px;
            margin: 0 0 .5em;
        }

        dialog i.cancel {
            cursor: pointer;
            padding: 0 5px;
            float: right;
        }

        dialog table {
            background: var(--page-background);
            border-collapse: collapse;
            border-radius: 4px;
            box-shadow: inset 0 0 0 1px var(--table-border-color);
            color: var(--page-color);
            margin: 0 0 1em 0;
            margin-bottom: 1em;
            padding: 0;
        }

        dialog table tr {
            border: 1px solid var(--table-border-color);
            padding: .35em;
        }

        dialog table th,
        dialog table td {
            border: 1px solid var(--table-border-color);
            padding: .625em;
            text-align: left;
            word-wrap: break-word;
        }

        dialog table thead th {
            background: var(--table-header);
            border-top-left-radius: 4px;
            border-top-right-radius: 4px;
            font-size: .85em;
        }

        dialog menu {
            display: none;
        }

        @keyframes scale {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }

        @keyframes backdrop {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if collector.callsCount > 0 %}
        {% set icon %}
            {{ source('@WebProfiler/Icon/workflow.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.callsCount }}</span>
        {% endset %}
        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Workflow Calls</b>
                <span>{{ collector.callsCount }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.workflows|length == 0 ? 'disabled' }}\">
        <span class=\"icon\">
            {{ source('@WebProfiler/Icon/workflow.svg') }}
        </span>
        <strong>Workflow</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Workflow</h2>

    {% if collector.workflows|length == 0 %}
        <div class=\"empty empty-panel\">
            <p>There are no workflows configured.</p>
        </div>
    {% else %}
        <script>
            {{ source('@WebProfiler/Script/Mermaid/mermaid-flowchart-v2.min.js') }}
            const isDarkMode = document.querySelector('body').classList.contains('theme-dark');
            mermaid.initialize({
                flowchart: {
                    useMaxWidth: true,
                },
                securityLevel: 'loose',
                theme: 'base',
                themeVariables: {
                    darkMode: isDarkMode,
                    fontFamily: 'var(--font-family-system)',
                    fontSize: 'var(--font-size-body)',
                    // the properties below don't support CSS variables
                    primaryColor: isDarkMode ? 'lightsteelblue' : 'aliceblue',
                    primaryTextColor: isDarkMode ? '#000' : '#000',
                    primaryBorderColor: isDarkMode ? 'steelblue' : 'lightsteelblue',
                    lineColor: isDarkMode ? '#939393' : '#d4d4d4',
                    secondaryColor: isDarkMode ? 'lightyellow' : 'lightyellow',
                    tertiaryColor: isDarkMode ? 'lightSalmon' : 'lightSalmon',
                }
            });

            {% for name, data in collector.workflows %}
                window.showNodeDetails{{ collector.hash(name) }} = function (node) {
                    const map = {{ data.listeners|json_encode|raw }};
                    showNodeDetails(node, map);
                };
            {% endfor %}

            const showNodeDetails = function (node, map) {
                const dialog = document.getElementById('detailsDialog');

                dialog.querySelector('tbody').innerHTML = '';
                for (const [eventName, listeners] of Object.entries(map[node])) {
                    listeners.forEach(listener => {
                        const row = document.createElement('tr');

                        const eventNameCode = document.createElement('code');
                        eventNameCode.textContent = eventName;

                        const eventNameCell = document.createElement('td');
                        eventNameCell.appendChild(eventNameCode);
                        row.appendChild(eventNameCell);

                        const listenerDetailsCell = document.createElement('td');
                        row.appendChild(listenerDetailsCell);

                        let listenerDetails;
                        const listenerDetailsCode = document.createElement('code');
                        listenerDetailsCode.textContent = listener.title;
                        if (listener.file) {
                            const link = document.createElement('a');
                            link.href = listener.file;
                            link.appendChild(listenerDetailsCode);
                            listenerDetails = link;
                        } else {
                            listenerDetails = listenerDetailsCode;
                        }
                        listenerDetailsCell.appendChild(listenerDetails);

                        if (typeof listener.guardExpressions === 'object') {
                            listenerDetailsCell.appendChild(document.createElement('br'));

                            const guardExpressionsWrapper = document.createElement('span');
                            guardExpressionsWrapper.appendChild(document.createTextNode('guard expressions: '));

                            listener.guardExpressions.forEach((expression, index) => {
                                if (index > 0) {
                                    guardExpressionsWrapper.appendChild(document.createTextNode(', '));
                                }

                                const expressionCode = document.createElement('code');
                                expressionCode.textContent = expression;
                                guardExpressionsWrapper.appendChild(expressionCode);
                            });

                            listenerDetailsCell.appendChild(guardExpressionsWrapper);
                        }

                        dialog.querySelector('tbody').appendChild(row);
                    });
                };

                if (dialog.dataset.processed) {
                    dialog.showModal();
                    return;
                }

                dialog.addEventListener('click', (e) => {
                    const rect = dialog.getBoundingClientRect();

                    const inDialog =
                        rect.top <= e.clientY &&
                        e.clientY <= rect.top + rect.height &&
                        rect.left <= e.clientX &&
                        e.clientX <= rect.left + rect.width;

                    !inDialog && dialog.close();
                });

                dialog.querySelectorAll('.cancel').forEach(elt => {
                    elt.addEventListener('click', () => dialog.close());
                });

                dialog.showModal();

                dialog.dataset.processed = true;
            };
            // We do not load all mermaid diagrams at once, but only when the tab is opened
            // This is because mermaid diagrams are in a tab, and cannot be renderer with a
            // \"good size\" if they are not visible
            document.addEventListener('DOMContentLoaded', () => {
                document.querySelectorAll('.tab').forEach((el) => {
                    const observer = new MutationObserver(() => {
                        if (!el.classList.contains('block')) {
                            return;
                        }
                        const mEl = el.querySelector('.sf-mermaid');
                        if (mEl.dataset.processed) {
                            return;
                        }
                        mermaid.run({
                            nodes: [mEl],
                        });
                    });
                    observer.observe(el, { attributeFilter: ['class'] });
                });
            });
        </script>

        <div class=\"sf-tabs js-tabs\">
            {% for name, data in collector.workflows %}
                <div class=\"tab\">
                    <h2 class=\"tab-title\">{{ name }}{% if data.calls|length %} ({{ data.calls|length }}){% endif %}</h2>

                    <div class=\"tab-content\">
                        <h3>Definition</h3>
                        <pre class=\"sf-mermaid\">
                            {{ data.dump|raw }}
                            {% for nodeId, events in data.listeners %}
                                click {{ nodeId }} showNodeDetails{{ collector.hash(name) }}
                            {% endfor %}
                        </pre>
                        <a href=\"{{ collector.buildMermaidLiveLink(name) }}\">View on mermaid.live</a>

                        <h3>Calls</h3>
                        <table>
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Call</th>
                                    <th>Args</th>
                                    <th>Return</th>
                                    <th>Exception</th>
                                    <th>Duration</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for call in data.calls %}
                                    <tr>
                                        <td class=\"font-normal text-small text-muted nowrap\">{{ loop.index }}</td>
                                        <td>
                                            <code>{{ call.method }}()</code>
                                            {% if call.previousMarking ?? null %}
                                                <hr />
                                                Previous marking:
                                                {{ profiler_dump(call.previousMarking) }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {{ profiler_dump(call.args) }}
                                        </td>
                                        <td>
                                            {% if call.return is defined %}
                                                {% if call.return is same as true %}
                                                    <code>true</code>
                                                {% elseif call.return is same as false %}
                                                    <code>false</code>
                                                {% else %}
                                                    {{ profiler_dump(call.return) }}
                                                {% endif %}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {% if call.exception is defined %}
                                                {{ profiler_dump(call.exception) }}
                                            {% endif %}
                                        </td>
                                        <td>
                                            {{ '%0.2f ms'|format(call.duration) }}
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% endif %}

    <dialog id=\"detailsDialog\">
        <h2>
            Event listeners
            <i class=\"cancel\">×</i>
        </h2>

        <table>
            <thead>
                <tr>
                    <th>event</th>
                    <th>listener</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        <menu>
            <small><i>⌨</i> <kbd>esc</kbd></small>
            <button class=\"btn btn-sm cancel\">Close</button>
        </menu>
    </dialog>
{% endblock %}
", "@WebProfiler/Collector/workflow.html.twig", "C:\\Users\\Acer-Swift\\Desktop\\symfony\\my_symfony_app\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\workflow.html.twig");
    }
}
