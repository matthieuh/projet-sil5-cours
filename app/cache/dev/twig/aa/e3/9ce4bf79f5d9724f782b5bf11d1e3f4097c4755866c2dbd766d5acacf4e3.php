<?php

/* sil12VitrineBundle:Email:share.txt.twig */
class __TwigTemplate_aae39ce4bf79f5d9724f782b5bf11d1e3f4097c4755866c2dbd766d5acacf4e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"col-md-6 col-md-offset-3\">
\t<div class=\"panel panel-default\">

\t\t<div class=\"panel-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div style=\"text-align:center;\"><h3 style=\"font-family:'Lobster';font-size:4rem;\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "name"), "html", null, true);
        echo "</h3></div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t";
        // line 8
        if (($this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "stock") <= 0)) {
            // line 9
            echo "\t\t\t\t\t\t<div class=\"alert alert-danger\">Cet article n'est plus en stock !</div>
\t\t\t\t\t";
        }
        // line 11
        echo "\t\t\t\t\t<a href=\"#\" class=\"thumbnail\"><img src=\"";
        echo twig_escape_filter($this->env, (isset($context["IMGpath"]) ? $context["IMGpath"] : $this->getContext($context, "IMGpath")), "html", null, true);
        echo "\" width=\"650px\"></a>
\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"caption\">
\t\t\t\t\t\t
\t\t\t\t\t\t<p><b>Description : </b>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "description"), "html", null, true);
        echo "</p>
\t\t\t\t\t\t<p><b>Prix : </b>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapeau"]) ? $context["chapeau"] : $this->getContext($context, "chapeau")), "price"), "html", null, true);
        echo " €</p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["boughtWith"]) ? $context["boughtWith"] : $this->getContext($context, "boughtWith")));
        foreach ($context['_seq'] as $context["_key"] => $context[" product"]) {
            // line 25
            echo "\t\tid :";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context[" product"]) ? $context[" product"] : $this->getContext($context, " product")), "id"), "html", null, true);
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context[' product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "\t
</div>";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Email:share.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 14,  56 => 9,  28 => 3,  38 => 6,  24 => 3,  87 => 25,  26 => 6,  31 => 8,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  25 => 5,  21 => 2,  19 => 1,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  44 => 12,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 17,  40 => 7,  37 => 11,  22 => 2,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 36,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 15,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 27,  64 => 25,  60 => 24,  57 => 11,  54 => 10,  51 => 18,  48 => 13,  45 => 17,  42 => 7,  39 => 9,  36 => 5,  33 => 9,  30 => 7,);
    }
}
