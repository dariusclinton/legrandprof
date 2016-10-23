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
        $__internal_aae766331a68b800286b6f092d7082a65f3e2a2675804b4f66a29236a96374f7 = $this->env->getExtension("native_profiler");
        $__internal_aae766331a68b800286b6f092d7082a65f3e2a2675804b4f66a29236a96374f7->enter($__internal_aae766331a68b800286b6f092d7082a65f3e2a2675804b4f66a29236a96374f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_aae766331a68b800286b6f092d7082a65f3e2a2675804b4f66a29236a96374f7->leave($__internal_aae766331a68b800286b6f092d7082a65f3e2a2675804b4f66a29236a96374f7_prof);

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
