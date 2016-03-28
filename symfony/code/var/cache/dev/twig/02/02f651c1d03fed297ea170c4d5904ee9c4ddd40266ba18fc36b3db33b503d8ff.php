<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_622d904de54bbbaa4885226f19f820db5acb34be88e45ed695343640b617eb4d extends Twig_Template
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
        $__internal_68ec430b14f98553b017bac2debd9cd8c93b439f863dc5adad59ccb206ce999c = $this->env->getExtension("native_profiler");
        $__internal_68ec430b14f98553b017bac2debd9cd8c93b439f863dc5adad59ccb206ce999c->enter($__internal_68ec430b14f98553b017bac2debd9cd8c93b439f863dc5adad59ccb206ce999c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68ec430b14f98553b017bac2debd9cd8c93b439f863dc5adad59ccb206ce999c->leave($__internal_68ec430b14f98553b017bac2debd9cd8c93b439f863dc5adad59ccb206ce999c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e7a633eacb05921aa0958407bad3d3764411d0143190d3c11eaddd65f60e3649 = $this->env->getExtension("native_profiler");
        $__internal_e7a633eacb05921aa0958407bad3d3764411d0143190d3c11eaddd65f60e3649->enter($__internal_e7a633eacb05921aa0958407bad3d3764411d0143190d3c11eaddd65f60e3649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e7a633eacb05921aa0958407bad3d3764411d0143190d3c11eaddd65f60e3649->leave($__internal_e7a633eacb05921aa0958407bad3d3764411d0143190d3c11eaddd65f60e3649_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_742f36d297dad4461f9a5169aba5e1af17d98bd4c540280d33576b25ea748426 = $this->env->getExtension("native_profiler");
        $__internal_742f36d297dad4461f9a5169aba5e1af17d98bd4c540280d33576b25ea748426->enter($__internal_742f36d297dad4461f9a5169aba5e1af17d98bd4c540280d33576b25ea748426_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_742f36d297dad4461f9a5169aba5e1af17d98bd4c540280d33576b25ea748426->leave($__internal_742f36d297dad4461f9a5169aba5e1af17d98bd4c540280d33576b25ea748426_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a013a9c4c21b3986615f7a4bd0d23ec9c777c2d98eff98a97e9fb3a0b64e8860 = $this->env->getExtension("native_profiler");
        $__internal_a013a9c4c21b3986615f7a4bd0d23ec9c777c2d98eff98a97e9fb3a0b64e8860->enter($__internal_a013a9c4c21b3986615f7a4bd0d23ec9c777c2d98eff98a97e9fb3a0b64e8860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a013a9c4c21b3986615f7a4bd0d23ec9c777c2d98eff98a97e9fb3a0b64e8860->leave($__internal_a013a9c4c21b3986615f7a4bd0d23ec9c777c2d98eff98a97e9fb3a0b64e8860_prof);

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
