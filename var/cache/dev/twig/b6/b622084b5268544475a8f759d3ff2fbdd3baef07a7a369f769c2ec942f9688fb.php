<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_16683286b5b01203d27176238b73e6f42be3fbeddbc591b9f33915e35847acb5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_515788b0d541caeebe9a17415e0bfbb15da8090bf4c9c1ba22d29f989433a008 = $this->env->getExtension("native_profiler");
        $__internal_515788b0d541caeebe9a17415e0bfbb15da8090bf4c9c1ba22d29f989433a008->enter($__internal_515788b0d541caeebe9a17415e0bfbb15da8090bf4c9c1ba22d29f989433a008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_515788b0d541caeebe9a17415e0bfbb15da8090bf4c9c1ba22d29f989433a008->leave($__internal_515788b0d541caeebe9a17415e0bfbb15da8090bf4c9c1ba22d29f989433a008_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6f92533981dab46db8dd88c21337ec0316a055bb77627dfc0586941b3498c3f4 = $this->env->getExtension("native_profiler");
        $__internal_6f92533981dab46db8dd88c21337ec0316a055bb77627dfc0586941b3498c3f4->enter($__internal_6f92533981dab46db8dd88c21337ec0316a055bb77627dfc0586941b3498c3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_6f92533981dab46db8dd88c21337ec0316a055bb77627dfc0586941b3498c3f4->leave($__internal_6f92533981dab46db8dd88c21337ec0316a055bb77627dfc0586941b3498c3f4_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0973b98d9498cde177fb3c76f03b05e828a2f1ed57a4185afdab52ae9a8bb0be = $this->env->getExtension("native_profiler");
        $__internal_0973b98d9498cde177fb3c76f03b05e828a2f1ed57a4185afdab52ae9a8bb0be->enter($__internal_0973b98d9498cde177fb3c76f03b05e828a2f1ed57a4185afdab52ae9a8bb0be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0973b98d9498cde177fb3c76f03b05e828a2f1ed57a4185afdab52ae9a8bb0be->leave($__internal_0973b98d9498cde177fb3c76f03b05e828a2f1ed57a4185afdab52ae9a8bb0be_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_b101b4a7c2c91264169dc41652695ecd5df6b57d8362c8916248610edb0b2b98 = $this->env->getExtension("native_profiler");
        $__internal_b101b4a7c2c91264169dc41652695ecd5df6b57d8362c8916248610edb0b2b98->enter($__internal_b101b4a7c2c91264169dc41652695ecd5df6b57d8362c8916248610edb0b2b98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_b101b4a7c2c91264169dc41652695ecd5df6b57d8362c8916248610edb0b2b98->leave($__internal_b101b4a7c2c91264169dc41652695ecd5df6b57d8362c8916248610edb0b2b98_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
