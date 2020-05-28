<?php

return [
    'alipay' => [
        'app_id'         => '2016102200735166',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAni1pUWO6o/beeygeLnsFMb110kWLo/qpHp4ywFdMQ/FfczWN3vzjH9H7ZKmrfs11wzj/yFBciebUB0+lcKwOWzUqxPbwKj3rMatWbo2+sUyejLkV8PrzLUtkL0w0T78B/KsaFKXFasjTRu9rAfoCS77hO9agbQh9BDZ7bUgoTCa+FQv2jb0DXEngcfukUb3H9SHveGHxRaaCrvcFiNQMv35PXveT8HBHGgLTRuqkztujeIKh9OMgYw/Pj33fbFgVl40v06eQmDP/nf+4XdZZ/QBji21ehIfF6fPn9DfPLCuXqZuMnGHYREU+QwQlQ+Qaz+G61Ffji3J4v9XApvpr2QIDAQAB',
        'private_key'    => 'MIIEogIBAAKCAQEApEwviVWEiBBBEPv+UQuoAzwhsnO4yoKGjsd2GQX26sFBk6zhOKBCB6aAhg87b7DY85VB8F+7yuLHwGq+voiaYB3Tgcy64G3tmtLKtzr7Bkskrr/0oB8ftV5Rg2rvyPwzZrGzJSsw+6T73AtEWTvrGD0JPPdEgbTorGXBj2qM8I8LGHYnd3BHC6528NpWge2F7QhEz1sYAouF9q9yajzcGIwgywvqSooD0uUZorF/oQn38KZNjaC/yvhLgahD8oGV6JpZZdQLhLgtDNRMDaJIn8tz2ua8AI47bxSatfNsQvX15lMLks45rB3Mx7dtyFuxUwUlfoeTlmv+mpWWds2fYwIDAQABAoIBAGrg6LeVOx7sO/eZhiogxA4+qskUwKx0VqZBGRFUMPkr+MXhW63jirDBXrBW7lpNGAT1Hq0JCfgEqN8CUc1OveYy4Ol6TkM7H6ts3tRteOjyLw3C75bOSGlKzwoHoa8EaUev55MRUs8Q14qghbjq4pek9QKE9DrQfd/QXic2sDK4P8CS6ZxqGexcTYA1/6JXqDLZ+hRWEHlK+KLEC0k/0H7O0TQ3ImWyDTPo1LyCJSTYoygIigCy4lu+dvud9JAWbrrCBDJj8JFBcYtM1sqjoHCUnEv9KQNazeH0Pnqyopd4qyCA8k6wYULiFSuc3Rhq4uo+8n0o77D+6PmUZCSYiRECgYEA2Ufh+TrJajyHofCVDdvGpwQw/DOs+ZSNUetftLiTRF0dKuAdKQO/HteECyOvrhGVQTfxGgxRlxpORarPlX5aa7AD9i8qCLBzuFOkU5rQmwevplh2Xki+Bo1tZfI/B6NBtGPhlkTYCUrFwKflHw3OfRKQNS5XLZDJRofDTCGviSkCgYEAwZNENuNF49aEpReYlqR8nXqWPykptaOKYmPs4notlyPUdvKDvCAgFx2hRHVrEl0SS8wQG1EMwJBs/5BVSOIhOjLRhDgZMe3dk/Ypx3DjlvqlY9vK7fXzkSnp1QNlb12dSkmVecxbdxcoyi0Ua+Rc2JCMfzUUw/8fdKS0UP3oGasCgYByq2AT4zWHDpjaGxje7n0BidG8WB1SvlZyxFCHFN4Lt0R8aziYe7SytzSlmFjP+dGWUMq6X4PzxdtHIyVYlQ1tRcBhfXSmj1ETF3li8hJjrwPBO3CEw8kdtiflJJqlEkDLzeaxInYNOVvyF+lwoR23nkNi/ajekEnZIi8sj56POQKBgBxn0N3BEhNx+jsDsGeCsaqmP3/7OVynJ/pyMWO2jBQetOHTipNDn5HkzjJujIzATZwD0OVBSn7Dcss50doFHN0ecfJWDRRvlFFPEShsH2mbVEPIEApFSj2mCeMxQWRLN3acP6wE2fMq2dh5LwL6GsnIxGUyU97DBEmolbFA4RtLAoGAF22QMKrW5rVsQV930Wl+FB/vlTiN9GYO5p5L5uKj6A2SvuREHyNvuqbLiPgtJJGqce6N/0fNFoXRXyxVajgRu6OavF90DQz1PZ7UjvY9ltQ6/gXsODyxsSlIS6HjWJ6VxunYyKIoUhZNA5WxBc0ffLYR8GpPX5gx7UuSuyjW6OA=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
