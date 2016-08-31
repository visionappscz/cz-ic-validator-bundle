# CZ IC Validator Bundle

The Validator Bundle usable with the symfony validation component for validation of CZ IC based on [the code written by David Grudl](https://gist.github.com/dg/6031c39a148478f0880c).

## Getting Started

### Installing

Install with composer
```
require visionappscz/cz-ic-validator-bundle
```

### Usage example
```
# validation/Company.yml
AppBundle\Entity\Company:
    properties:
        companyId:
            - VisionApps\CZICValidator\Validator\CompanyId: ~
```

[See the documentation](http://symfony.com/doc/current/reference/constraints/NotNull.html#basic-usage) for more information about the syntax of definitions of validation rules.
