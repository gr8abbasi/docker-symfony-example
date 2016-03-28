<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_18d79f9715de07b5492f36d7b5de4c4b999b94540cf5da99f758ddabdd89460c extends Twig_Template
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
        $__internal_423660c3be2aa30175c72f4093c4c0caeac8f955db7b7116d6dd83477a9ea9d2 = $this->env->getExtension("native_profiler");
        $__internal_423660c3be2aa30175c72f4093c4c0caeac8f955db7b7116d6dd83477a9ea9d2->enter($__internal_423660c3be2aa30175c72f4093c4c0caeac8f955db7b7116d6dd83477a9ea9d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_423660c3be2aa30175c72f4093c4c0caeac8f955db7b7116d6dd83477a9ea9d2->leave($__internal_423660c3be2aa30175c72f4093c4c0caeac8f955db7b7116d6dd83477a9ea9d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_affae7261611cb6103d163920732a461dfa3931d57418808333f156b20e4c409 = $this->env->getExtension("native_profiler");
        $__internal_affae7261611cb6103d163920732a461dfa3931d57418808333f156b20e4c409->enter($__internal_affae7261611cb6103d163920732a461dfa3931d57418808333f156b20e4c409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_affae7261611cb6103d163920732a461dfa3931d57418808333f156b20e4c409->leave($__internal_affae7261611cb6103d163920732a461dfa3931d57418808333f156b20e4c409_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5db79308c988782071a7bf0497eece5e6c3f7880b033f5868baf327152fb1714 = $this->env->getExtension("native_profiler");
        $__internal_5db79308c988782071a7bf0497eece5e6c3f7880b033f5868baf327152fb1714->enter($__internal_5db79308c988782071a7bf0497eece5e6c3f7880b033f5868baf327152fb1714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5db79308c988782071a7bf0497eece5e6c3f7880b033f5868baf327152fb1714->leave($__internal_5db79308c988782071a7bf0497eece5e6c3f7880b033f5868baf327152fb1714_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_fca484f71ddd7fab7d23578b635c90538a4515acea7875061b3dbfcef6af4ac6 = $this->env->getExtension("native_profiler");
        $__internal_fca484f71ddd7fab7d23578b635c90538a4515acea7875061b3dbfcef6af4ac6->enter($__internal_fca484f71ddd7fab7d23578b635c90538a4515acea7875061b3dbfcef6af4ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_fca484f71ddd7fab7d23578b635c90538a4515acea7875061b3dbfcef6af4ac6->leave($__internal_fca484f71ddd7fab7d23578b635c90538a4515acea7875061b3dbfcef6af4ac6_prof);

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
