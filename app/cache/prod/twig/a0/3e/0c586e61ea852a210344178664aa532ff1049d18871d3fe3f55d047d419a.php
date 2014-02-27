<?php

/* sil12VitrineBundle:Promotion:edit.html.twig */
class __TwigTemplate_a03e0c586e61ea852a210344178664aa532ff1049d18871d3fe3f55d047d419a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Promotion edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("promotion");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : null), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Promotion:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 47,  152 => 56,  120 => 58,  100 => 40,  139 => 43,  113 => 40,  23 => 1,  110 => 41,  104 => 37,  96 => 43,  76 => 36,  53 => 5,  180 => 81,  161 => 71,  146 => 64,  137 => 49,  118 => 49,  114 => 41,  84 => 32,  127 => 62,  77 => 29,  70 => 27,  65 => 26,  58 => 24,  52 => 23,  34 => 7,  145 => 48,  97 => 29,  83 => 26,  81 => 30,  74 => 30,  37 => 47,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 58,  111 => 46,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 62,  131 => 6,  119 => 51,  108 => 38,  102 => 46,  71 => 25,  67 => 26,  63 => 24,  59 => 25,  47 => 12,  29 => 5,  94 => 33,  89 => 32,  85 => 31,  79 => 27,  75 => 25,  68 => 26,  56 => 24,  50 => 18,  43 => 14,  28 => 3,  38 => 9,  24 => 3,  87 => 28,  72 => 25,  55 => 20,  41 => 12,  26 => 6,  35 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 52,  138 => 54,  136 => 42,  123 => 53,  121 => 42,  117 => 41,  115 => 43,  105 => 40,  101 => 34,  91 => 41,  69 => 27,  66 => 23,  62 => 22,  49 => 14,  25 => 5,  21 => 2,  19 => 1,  98 => 35,  93 => 40,  88 => 38,  78 => 34,  46 => 14,  44 => 11,  40 => 11,  32 => 5,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 67,  149 => 51,  147 => 54,  144 => 49,  141 => 48,  133 => 52,  130 => 41,  125 => 43,  122 => 43,  116 => 41,  112 => 53,  109 => 34,  106 => 39,  103 => 50,  99 => 43,  95 => 33,  92 => 34,  86 => 35,  82 => 38,  80 => 32,  73 => 28,  64 => 10,  60 => 22,  57 => 22,  54 => 22,  51 => 20,  48 => 16,  45 => 7,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}
