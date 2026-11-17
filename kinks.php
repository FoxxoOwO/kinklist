<?php

declare(strict_types=1);

/**
 * Normalizes a label into a safe ASCII key for HTML IDs and POST/JSON arrays.
 */
function slugifyKinkKey(string $label): string
{
    $key = strtolower(trim($label));
    $key = preg_replace('/[^a-z0-9]+/', '_', $key) ?? $key;
    return trim($key, '_');
}

/**
 * Returns the rating definitions in display order.
 *
 * @return array<string, array{label: string, class: string}>
 */
function getRatings(): array
{
    return [
        'curious'     => ['label' => 'Curious',     'class' => 'dot-curious'],
        'favorite'    => ['label' => 'Favorite',    'class' => 'dot-favorite'],
        'like'        => ['label' => 'Like',        'class' => 'dot-like'],
        'indifferent' => ['label' => 'Indifferent', 'class' => 'dot-indifferent'],
        'maybe'       => ['label' => 'Maybe',       'class' => 'dot-maybe'],
        'limit'       => ['label' => 'Limit',       'class' => 'dot-limit'],
        'not_entered' => ['label' => 'Not entered', 'class' => 'dot-not-entered'],
    ];
}

/**
 * Returns allowed options for select/radio fields in the Info section.
 *
 * @return array<string, array<string, string>>
 */
function getBasicInfoOptions(): array
{
    return [
        'gender' => [
            ''           => 'Not specified',
            'female'     => 'Female',
            'male'       => 'Male',
            'non-binary' => 'Non-binary',
        ],
        'genitals' => [
            ''       => 'Not specified',
            'penis'  => 'Penis',
            'vagina' => 'Vagina',
            'both'   => 'Both',
        ],
        'boob_size' => [
            'none'  => 'None',
            'a'     => 'A',
            'b'     => 'B',
            'c'     => 'C',
            'd'     => 'D',
            'dd'    => 'DD',
            'other' => 'Other',
        ],
        'orientation' => [
            ''             => 'Not specified',
            'heterosexual' => 'Heterosexual',
            'homosexual'   => 'Homosexual',
            'bisexual'     => 'Bisexual',
            'pansexual'    => 'Pansexual',
            'asexual'      => 'Asexual',
            'other'        => 'Other',
        ],
        'body_count' => [
            'none'  => 'Not specified',
            '0'     => '0',
            '1-5'   => '1–5',
            '6-10'  => '6–10',
            '11-20' => '11–20',
            '21-50' => '21–50',
            '50+'   => '50+',
        ],
    ];
}

/**
 * Returns all kink sections, their column layout, and items.
 *
 * @return array<string, array{title: string, columns: ?array<string, string>, items: list<string>}>
 */
function getKinkSections(): array
{
    return [
        'body' => [
            'title'   => 'Body',
            'columns' => null,
            'items'   => [
                'Feminine', 'Masculine', 'Skinny', 'Fit', 'Chubby', 'Obese', 'Muscular',
                'Small Breasts', 'Large Breasts', 'Small Cocks', 'Large Cocks',
                'Body hair', 'Shaved body', 'Tall', 'Short', 'Tattoos', 'Piercing',
                'Bald', 'Short Hair', 'Long Hair', 'Glasses', 'Redhead', 'Blonde',
                'Brunette', 'Black hair', 'Dyed Hair', 'Beard',
            ],
        ],
        'clothing' => [
            'title'   => 'Clothing',
            'columns' => ['me' => 'Me', 'partner' => 'Partner'],
            'items'   => [
                'Clothed Sex', 'Lingerie', 'Stockings and/or Garterbelt', 'Kneesocks',
                'Fishnets', 'Heels', 'Knee-high boots', 'Corset', 'Gloves', 'Harness',
                'Gas Masks', 'Masks', 'Choker', 'Leather', 'Latex', 'Uniform / costume',
                'Cross-dressing',
            ],
        ],
        'positions' => [
            'title'   => 'Positions',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Missionary', 'Doggystyle', 'Sixty-Nine', 'Cowgirl', 'Reverse-Cowgirl',
                'Piledriver', 'Mating Press', 'Spitroasting', 'Prone Bone', 'Spooning',
                'Swing', 'Lotus',
            ],
        ],
        'general' => [
            'title'   => 'General',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Romance / Affection',
                'Edging',
                'Teasing',
                'JOI, SI',
                'Dirty Talk',
                'Photography/Recording',
                'Vanilla Sex',
                'French Kissing',
                'Ignoring',
                'Cybersex/Sexting',
                'Multiple Orgasms',
                'Pet Names',
            ],
        ],
        'penis' => [
            'title'   => 'Penis oriented',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Handjob',
                'Blowjob',
                'Deepthroat',
                'Facefuck',
                'Teabagging',
                'Cockring',
                'Frottage',
                'Thighjob',
                'Assjob',
                'Titjob',
                'Docking',
                'Flaccid Play',
            ],
        ],
        'vagina' => [
            'title'   => 'Vagina oriented',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Fingering',
                'Cunnilingus',
                'Facesitting',
                'Fisting',
                'Double Vaginal Penetration',
                'Clit stimulation',
                'Squirting',
                'Scissoring',
                'Double Penetration (anal + vaginal)',
                'Triple Penetration (anal + vaginal + oral)',
                'Stretching',
            ],
        ],
        'ass' => [
            'title'   => 'Ass oriented',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Anal sex',
                'Rimming',
                'Pegging',
                'Double penetration',
                'Fingering',
                'Fisting',
                'Anal Stretching',
                'Gaping',
                'Enema',
                'Prolapse',
            ],
        ],
        'toys' => [
            'title'   => 'Toys',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Realistic Dildos',
                'Knotted Dildos',
                'Horse Dildos',
                'Other Fantasy Dildos',
                'Buttplugs',
                'Hollow Plugs',
                'Vibrators',
                'Sounding',
                'Ovipositor',
                'Fuck Machine',
                'Masturbator',
                'Speculum',
                'Strap-On',
                'Nipple Sucker',
                'Cock/Pussy Pump',
                'Anal Beads',
                'Magic Wand',
            ],
        ],
        'degradation' => [
            'title'   => 'Degradation',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Humiliation',
                'Verbal Abuse / Insults',
                'Spitting',
                'Slapping',
                'Choking / Breathplay',
                'Hair Pulling',
                'Gagging',
                'Public Humiliation',
                'Name Calling',
                'Cum Play / Facial',
            ],
        ],
        'domination' => [
            'title'   => 'Domination',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Bondage / Rope',
                'Handcuffs / Restraints',
                'Blindfolding',
                'Spanking',
                'Impact Play / Whipping',
                'Collar & Leash',
                'Pet Play',
                'Orgasm Control / Denial',
                'Sensory Deprivation',
                'Master / Slave',
                'Daddy / Mommy Play',
                'Brat Taming',
            ],
        ],
        'cnc' => [
            'title'   => 'CNC',
            'columns' => ['giving' => 'Giving', 'receiving' => 'Receiving'],
            'items'   => [
                'Rape',
                'Blackmail',
                'Kidnapping',
                'Drugs',
                'Alcohol',
                'Sleep Play',
            ],
        ],
    ];
}
