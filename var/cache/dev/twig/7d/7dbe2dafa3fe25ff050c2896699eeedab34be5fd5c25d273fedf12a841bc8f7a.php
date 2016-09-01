<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c540542da6661f22dd959f9bc2b595fd4127ea0ddbcbb9066e46ee2b63dc1e75 extends Twig_Template
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
        $__internal_9a8ffb36a698358a48410564a280de7b8d62691d2f0896b41074df6f78a98fe6 = $this->env->getExtension("native_profiler");
        $__internal_9a8ffb36a698358a48410564a280de7b8d62691d2f0896b41074df6f78a98fe6->enter($__internal_9a8ffb36a698358a48410564a280de7b8d62691d2f0896b41074df6f78a98fe6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9a8ffb36a698358a48410564a280de7b8d62691d2f0896b41074df6f78a98fe6->leave($__internal_9a8ffb36a698358a48410564a280de7b8d62691d2f0896b41074df6f78a98fe6_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ea1cb8382730ed29d022b187984286a91f1a55da0c8b5e4251e4853337cbeffd = $this->env->getExtension("native_profiler");
        $__internal_ea1cb8382730ed29d022b187984286a91f1a55da0c8b5e4251e4853337cbeffd->enter($__internal_ea1cb8382730ed29d022b187984286a91f1a55da0c8b5e4251e4853337cbeffd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ea1cb8382730ed29d022b187984286a91f1a55da0c8b5e4251e4853337cbeffd->leave($__internal_ea1cb8382730ed29d022b187984286a91f1a55da0c8b5e4251e4853337cbeffd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_17b4529c760ea1f2518defe8f5becd8cba6fe647eaa99251ac1e9a0a119f69e6 = $this->env->getExtension("native_profiler");
        $__internal_17b4529c760ea1f2518defe8f5becd8cba6fe647eaa99251ac1e9a0a119f69e6->enter($__internal_17b4529c760ea1f2518defe8f5becd8cba6fe647eaa99251ac1e9a0a119f69e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_17b4529c760ea1f2518defe8f5becd8cba6fe647eaa99251ac1e9a0a119f69e6->leave($__internal_17b4529c760ea1f2518defe8f5becd8cba6fe647eaa99251ac1e9a0a119f69e6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f3d2af5e8a3aa15a4b2693c09e3d95182c7853ff9bd7d4cadb683fea4d0df7ab = $this->env->getExtension("native_profiler");
        $__internal_f3d2af5e8a3aa15a4b2693c09e3d95182c7853ff9bd7d4cadb683fea4d0df7ab->enter($__internal_f3d2af5e8a3aa15a4b2693c09e3d95182c7853ff9bd7d4cadb683fea4d0df7ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_f3d2af5e8a3aa15a4b2693c09e3d95182c7853ff9bd7d4cadb683fea4d0df7ab->leave($__internal_f3d2af5e8a3aa15a4b2693c09e3d95182c7853ff9bd7d4cadb683fea4d0df7ab_prof);

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
