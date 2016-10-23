<?php

/* LGPUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_8289a9aa6768909206d53459e47ae4d0f5ac845c84045bd81222574220bfed7f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "LGPUserBundle:Resetting:checkEmail.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df241395adca6d794d1f8b883722580a0ff96baaa4b9588eb8f7d7c88a51c0cc = $this->env->getExtension("native_profiler");
        $__internal_df241395adca6d794d1f8b883722580a0ff96baaa4b9588eb8f7d7c88a51c0cc->enter($__internal_df241395adca6d794d1f8b883722580a0ff96baaa4b9588eb8f7d7c88a51c0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "LGPUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df241395adca6d794d1f8b883722580a0ff96baaa4b9588eb8f7d7c88a51c0cc->leave($__internal_df241395adca6d794d1f8b883722580a0ff96baaa4b9588eb8f7d7c88a51c0cc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0218e5b533565f03fe56e597d746a305eb561d6308eaa466b877aad45ad733aa = $this->env->getExtension("native_profiler");
        $__internal_0218e5b533565f03fe56e597d746a305eb561d6308eaa466b877aad45ad733aa->enter($__internal_0218e5b533565f03fe56e597d746a305eb561d6308eaa466b877aad45ad733aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_0218e5b533565f03fe56e597d746a305eb561d6308eaa466b877aad45ad733aa->leave($__internal_0218e5b533565f03fe56e597d746a305eb561d6308eaa466b877aad45ad733aa_prof);

    }

    public function getTemplateName()
    {
        return "LGPUserBundle:Resetting:checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"FOSUserBundle::layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%email%': email}) }}
</p>
{% endblock %}
";
    }
}
