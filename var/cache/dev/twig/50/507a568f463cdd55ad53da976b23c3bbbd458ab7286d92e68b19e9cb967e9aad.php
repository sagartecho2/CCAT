<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_414128f0f0a87d6dc4d10e4733937b37d0eb53e37410ec57e70378d81d6eea5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cbc79485def87acaeb812d500442ec1b3c1baab1161c09d40c2355ea099ca8ce = $this->env->getExtension("native_profiler");
        $__internal_cbc79485def87acaeb812d500442ec1b3c1baab1161c09d40c2355ea099ca8ce->enter($__internal_cbc79485def87acaeb812d500442ec1b3c1baab1161c09d40c2355ea099ca8ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cbc79485def87acaeb812d500442ec1b3c1baab1161c09d40c2355ea099ca8ce->leave($__internal_cbc79485def87acaeb812d500442ec1b3c1baab1161c09d40c2355ea099ca8ce_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_492374686e993c634a7351c0bbf480a414ef100aab6b68e7b069f1bf3b8f2f49 = $this->env->getExtension("native_profiler");
        $__internal_492374686e993c634a7351c0bbf480a414ef100aab6b68e7b069f1bf3b8f2f49->enter($__internal_492374686e993c634a7351c0bbf480a414ef100aab6b68e7b069f1bf3b8f2f49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_492374686e993c634a7351c0bbf480a414ef100aab6b68e7b069f1bf3b8f2f49->leave($__internal_492374686e993c634a7351c0bbf480a414ef100aab6b68e7b069f1bf3b8f2f49_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2946206a205501b26b4f65077593953171180de00a7922905274756d77c69895 = $this->env->getExtension("native_profiler");
        $__internal_2946206a205501b26b4f65077593953171180de00a7922905274756d77c69895->enter($__internal_2946206a205501b26b4f65077593953171180de00a7922905274756d77c69895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2946206a205501b26b4f65077593953171180de00a7922905274756d77c69895->leave($__internal_2946206a205501b26b4f65077593953171180de00a7922905274756d77c69895_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_532a568abc991760d9ac81cb59e15b5e393684dd173a01c15386585a4a916571 = $this->env->getExtension("native_profiler");
        $__internal_532a568abc991760d9ac81cb59e15b5e393684dd173a01c15386585a4a916571->enter($__internal_532a568abc991760d9ac81cb59e15b5e393684dd173a01c15386585a4a916571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_532a568abc991760d9ac81cb59e15b5e393684dd173a01c15386585a4a916571->leave($__internal_532a568abc991760d9ac81cb59e15b5e393684dd173a01c15386585a4a916571_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
