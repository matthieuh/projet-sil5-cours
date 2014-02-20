<?php

/* sil12VitrineBundle:Category:new.html.twig */
class __TwigTemplate_496100682af9321fe31c87f37ef05811e2b454ff81771bcc459c18b96180fd3b extends Twig_Template
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
        echo "<h1>Category creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form');
        echo "

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("category");
        echo "\">
            Back to the list
        </a>
    </li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Category:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  104 => 45,  70 => 24,  77 => 30,  23 => 1,  84 => 37,  74 => 29,  37 => 46,  100 => 42,  65 => 26,  53 => 18,  165 => 72,  160 => 70,  153 => 66,  145 => 63,  113 => 49,  83 => 26,  52 => 20,  134 => 41,  126 => 6,  120 => 5,  81 => 25,  76 => 22,  34 => 7,  90 => 31,  58 => 18,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 22,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 80,  159 => 61,  143 => 56,  135 => 53,  131 => 40,  119 => 42,  108 => 47,  102 => 39,  71 => 30,  67 => 24,  63 => 25,  59 => 22,  47 => 10,  29 => 3,  94 => 32,  89 => 33,  85 => 32,  79 => 27,  75 => 24,  68 => 26,  56 => 21,  50 => 10,  43 => 9,  28 => 3,  38 => 6,  24 => 3,  87 => 25,  72 => 28,  55 => 21,  41 => 6,  26 => 6,  35 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 59,  123 => 47,  121 => 46,  117 => 49,  115 => 43,  105 => 41,  101 => 39,  91 => 27,  69 => 23,  66 => 22,  62 => 21,  49 => 14,  25 => 5,  21 => 2,  19 => 1,  98 => 40,  93 => 40,  88 => 29,  78 => 34,  46 => 14,  44 => 11,  40 => 7,  32 => 4,  27 => 4,  22 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 59,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 52,  116 => 41,  112 => 42,  109 => 34,  106 => 38,  103 => 32,  99 => 46,  95 => 28,  92 => 42,  86 => 35,  82 => 29,  80 => 19,  73 => 28,  64 => 26,  60 => 17,  57 => 19,  54 => 17,  51 => 11,  48 => 19,  45 => 6,  42 => 10,  39 => 10,  36 => 7,  33 => 6,  30 => 7,);
    }
}