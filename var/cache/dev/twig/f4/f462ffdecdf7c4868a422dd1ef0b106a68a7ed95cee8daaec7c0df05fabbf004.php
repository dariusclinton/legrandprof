<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_2c81549e2fa7fdc7763ee3382a816de049253eb052523afc3847de8b2595ae4e extends Twig_Template
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
        $__internal_8c2561991cf572d96f5abaa1ec7ddd126d158f3734ac8a7cc4942d74d938b9fb = $this->env->getExtension("native_profiler");
        $__internal_8c2561991cf572d96f5abaa1ec7ddd126d158f3734ac8a7cc4942d74d938b9fb->enter($__internal_8c2561991cf572d96f5abaa1ec7ddd126d158f3734ac8a7cc4942d74d938b9fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_8c2561991cf572d96f5abaa1ec7ddd126d158f3734ac8a7cc4942d74d938b9fb->leave($__internal_8c2561991cf572d96f5abaa1ec7ddd126d158f3734ac8a7cc4942d74d938b9fb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
    }
}
