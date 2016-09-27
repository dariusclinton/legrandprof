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
        $__internal_cb664202452e54abc17b7d79d8952a7458cf9d4591801bdee91924ecd034d580 = $this->env->getExtension("native_profiler");
        $__internal_cb664202452e54abc17b7d79d8952a7458cf9d4591801bdee91924ecd034d580->enter($__internal_cb664202452e54abc17b7d79d8952a7458cf9d4591801bdee91924ecd034d580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cb664202452e54abc17b7d79d8952a7458cf9d4591801bdee91924ecd034d580->leave($__internal_cb664202452e54abc17b7d79d8952a7458cf9d4591801bdee91924ecd034d580_prof);

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
