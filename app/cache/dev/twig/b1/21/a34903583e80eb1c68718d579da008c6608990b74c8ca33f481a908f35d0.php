<?php

/* sil12VitrineBundle:Client:new.html.twig */
class __TwigTemplate_b121a34903583e80eb1c68718d579da008c6608990b74c8ca33f481a908f35d0 extends Twig_Template
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
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("client");
        echo "\">
    Back to the list
</a>


<div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      <h3 class=\"panel-title\">Inscription</h3>
    </div>
    <div class=\"panel-body\">
      \t";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
\t\t\t";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors', array("global_errors" => true));
        echo "
      \t";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "sil12VitrineBundle:Client:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 47,  23 => 3,  110 => 50,  104 => 46,  76 => 33,  53 => 16,  180 => 81,  161 => 71,  146 => 64,  137 => 60,  118 => 49,  114 => 49,  84 => 30,  127 => 54,  77 => 31,  70 => 24,  65 => 28,  58 => 15,  34 => 7,  97 => 29,  81 => 25,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 17,  128 => 49,  107 => 36,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 18,  119 => 39,  102 => 32,  71 => 19,  67 => 25,  63 => 24,  59 => 14,  94 => 28,  89 => 29,  85 => 36,  75 => 26,  68 => 29,  56 => 16,  28 => 5,  38 => 9,  24 => 3,  87 => 28,  26 => 6,  31 => 4,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 73,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 42,  121 => 5,  117 => 44,  105 => 40,  91 => 27,  62 => 22,  49 => 17,  25 => 5,  21 => 2,  19 => 1,  93 => 32,  88 => 38,  78 => 26,  46 => 7,  44 => 12,  27 => 4,  79 => 38,  72 => 25,  69 => 23,  47 => 10,  40 => 11,  37 => 12,  22 => 1,  246 => 90,  157 => 56,  145 => 48,  139 => 43,  131 => 6,  123 => 53,  120 => 40,  115 => 43,  111 => 34,  108 => 44,  101 => 32,  98 => 31,  96 => 42,  83 => 26,  74 => 25,  66 => 23,  55 => 19,  52 => 15,  50 => 21,  43 => 9,  41 => 13,  35 => 5,  32 => 6,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 67,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 5,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 42,  103 => 32,  99 => 43,  95 => 30,  92 => 38,  86 => 28,  82 => 27,  80 => 32,  73 => 23,  64 => 21,  60 => 17,  57 => 23,  54 => 22,  51 => 11,  48 => 14,  45 => 16,  42 => 14,  39 => 8,  36 => 5,  33 => 11,  30 => 7,);
    }
}
