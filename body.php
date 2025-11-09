<?php

$body = [
    "feminine",
    "masculine",
    "skinny",
    "fit",
    "chubby",
    "obese",
    "muscular",
    "small breasts",
    "large breasts",
    "small cocks",
    "large cocks",
    "body hair",
    "shaved body",
    "tall",
    "short",
    "tattoos",
    "piercing",
    "bald",
    "short hair",
    "long hair",
    "glasses",
    "redhead",
    "blonde",
    "brunette",
    "black hair",
    "dyed hair",
    "beard"
];

$clothing = [
    "clothed sex",
    "lingerie",
    "stockings and/or garterbelt",
    "kneesocks",
    "fishnets",
    "heels",
    "knee-high boots",
    "corset",
    "gloves",
    "harness",
    "gas masks",
    "masks",
    "choker",
    "leather",
    "latex",
    "uniform / costume",
    "cross-dressing"
];

$positions = [
    "missionary",
    "doggystyle",
    "sixty-nine",
    "cowgirl",
    "reverse-cowgirl",
    "piledriver",
    "mating press",
    "spitroasting",
    "prone bone",
    "spooning",
    "swing",
    "lotus"
];



function renderGroup($group) {
    


    // Vytvoříme unikátní prefix pro ID atributy
    /* $id_prefix = $kinkKey;
    if ($colKey === 'partner' || $colKey === 'receiving') {
        $id_prefix .= '_' . $colKey;
    }

    // Vytvoříme finální jména a ID
    $name_tried = "preferences[$kinkKey][$colKey][tried]";
    $name_rating = "preferences[$kinkKey][$colKey][rating]";
    
    $id_fav = $id_prefix . '_fav';
    $id_like = $id_prefix . '_like';
    $id_ind = $id_prefix . '_ind';
    $id_maybe = $id_prefix . '_maybe';
    $id_limit = $id_prefix . '_limit';
    $id_none = $id_prefix . '_none'; */

echo <<<HTML
    <table class="preference-table">    
    <tbody>
HTML;

    foreach ($group as $kinkKey) {
        // Vytvoříme unikátní prefix pro ID atributy
        $id_prefix = $kinkKey;
        $kinkName = ucfirst($kinkKey);

        // Vytvoříme finální jména a ID
        $name_tried = "preferences[$kinkKey][tried]";
        $name_rating = "preferences[$kinkKey][rating]";
        
        $id_fav = $id_prefix . '_fav';
        $id_like = $id_prefix . '_like';
        $id_ind = $id_prefix . '_ind';
        $id_maybe = $id_prefix . '_maybe';
        $id_limit = $id_prefix . '_limit';
        $id_none = $id_prefix . '_none';

        echo <<<HTML
            <tr>
                <td><div class="label-cell">$kinkName</div></td>
                <td>
                    <div class="choice-cell">
                        <label class="choice-dot-checkbox" title="Tried">
                            <input type="checkbox" name="$name_tried" value="1">
                            <span class="dot checkbox-visual"></span>
                        </label>
                        <span class="choice-separator"></span>
                        
                        <input type="radio" id="$id_fav" name="$name_rating" value="favorite">
                        <label for="$id_fav" class="dot-label dot-favorite" title="Favorite"></label>
                        
                        <input type="radio" id="$id_like" name="$name_rating" value="like">
                        <label for="$id_like" class="dot-label dot-like" title="Like"></label>
                        
                        <input type="radio" id="$id_ind" name="$name_rating" value="indifferent">
                        <label for="$id_ind" class="dot-label dot-indifferent" title="Indifferent"></label>
                        
                        <input type="radio" id="$id_maybe" name="$name_rating" value="maybe">
                        <label for="$id_maybe" class="dot-label dot-maybe" title="Maybe"></label>
                        
                        <input type="radio" id="$id_limit" name="$name_rating" value="limit">
                        <label for="$id_limit" class="dot-label dot-limit" title="Limit"></label>
                        
                        <input type="radio" id="$id_none" name="$name_rating" value="not_entered" checked>
                        <label for="$id_none" class="dot-label dot-not-entered" title="Not entered"></label>
                    </div>
HTML;
    }
        echo <<<HTML
                </td>
            </tr>
    </tbody>
    </table>
HTML;
}

function renderGroupMulti($group, $col1, $col2) {
    
    
        $col1name = ucfirst($col1);
        $col2name = ucfirst($col2);


echo <<<HTML
    <table class="preference-table">  
        <thead>
            <tr>
                <th></th>
                <th>$col1name</th>
                <th>$col2name</th>
            </tr>
        </thead>  
    <tbody>
HTML;

    foreach ($group as $kinkKey) {
        // Vytvoříme unikátní prefix pro ID atributy
        $id_prefix = $kinkKey;
        
        $kinkName = ucfirst($kinkKey);

        // Vytvoříme finální jména a ID
        $name_tried1 = "preferences[$kinkKey][$col1][tried]";
        $name_rating1 = "preferences[$kinkKey][$col1][rating]";

        $name_tried2 = "preferences[$kinkKey][$col2][tried]";
        $name_rating2 = "preferences[$kinkKey][$col2][rating]";
        
        $id_fav1 = $id_prefix . '_fav' . '_' . $col1;
        $id_like1 = $id_prefix . '_like' . '_' . $col1;
        $id_ind1 = $id_prefix . '_ind' . '_' . $col1;
        $id_maybe1 = $id_prefix . '_maybe' . '_' . $col1;
        $id_limit1 = $id_prefix . '_limit' . '_' . $col1;
        $id_none1 = $id_prefix . '_none' . '_' . $col1;

        $id_fav2 = $id_prefix . '_fav' . '_' . $col2;
        $id_like2 = $id_prefix . '_like' . '_' . $col2;
        $id_ind2 = $id_prefix . '_ind' . '_' . $col2;
        $id_maybe2 = $id_prefix . '_maybe' . '_' . $col2;
        $id_limit2 = $id_prefix . '_limit' . '_' . $col2;
        $id_none2 = $id_prefix . '_none' . '_' . $col2;


        echo <<<HTML
            <tr>
                <td><div class="label-cell">$kinkName</div></td>
                <td>
                    <div class="choice-cell">
                        <label class="choice-dot-checkbox" title="Tried">
                            <input type="checkbox" name="$name_tried1" value="1">
                            <span class="dot checkbox-visual"></span>
                        </label>
                        <span class="choice-separator"></span>
                        
                        <input type="radio" id="$id_fav1" name="$name_rating1" value="favorite">
                        <label for="$id_fav1" class="dot-label dot-favorite" title="Favorite"></label>
                        
                        <input type="radio" id="$id_like1" name="$name_rating1" value="like">
                        <label for="$id_like1" class="dot-label dot-like" title="Like"></label>
                        
                        <input type="radio" id="$id_ind1" name="$name_rating1" value="indifferent">
                        <label for="$id_ind1" class="dot-label dot-indifferent" title="Indifferent"></label>
                        
                        <input type="radio" id="$id_maybe1" name="$name_rating1" value="maybe">
                        <label for="$id_maybe1" class="dot-label dot-maybe" title="Maybe"></label>
                        
                        <input type="radio" id="$id_limit1" name="$name_rating1" value="limit">
                        <label for="$id_limit1" class="dot-label dot-limit" title="Limit"></label>
                        
                        <input type="radio" id="$id_none1" name="$name_rating1" value="not_entered" checked>
                        <label for="$id_none1" class="dot-label dot-not-entered" title="Not entered"></label>
                    </div>
                </td>
                <td>
                    <div class="choice-cell">
                        <label class="choice-dot-checkbox" title="Tried">
                            <input type="checkbox" name="$name_tried2" value="1">
                            <span class="dot checkbox-visual"></span>
                        </label>
                        <span class="choice-separator"></span>
                        
                        <input type="radio" id="$id_fav2" name="$name_rating2" value="favorite">
                        <label for="$id_fav2" class="dot-label dot-favorite" title="Favorite"></label>
                        
                        <input type="radio" id="$id_like2" name="$name_rating2" value="like">
                        <label for="$id_like2" class="dot-label dot-like" title="Like"></label>
                        
                        <input type="radio" id="$id_ind2" name="$name_rating2" value="indifferent">
                        <label for="$id_ind2" class="dot-label dot-indifferent" title="Indifferent"></label>
                        
                        <input type="radio" id="$id_maybe2" name="$name_rating2" value="maybe">
                        <label for="$id_maybe2" class="dot-label dot-maybe" title="Maybe"></label>
                        
                        <input type="radio" id="$id_limit2" name="$name_rating2" value="limit">
                        <label for="$id_limit2" class="dot-label dot-limit" title="Limit"></label>
                        
                        <input type="radio" id="$id_none2" name="$name_rating2" value="not_entered" checked>
                        <label for="$id_none2" class="dot-label dot-not-entered" title="Not entered"></label>
                    </div>
                </td>
HTML;
        }
        echo <<<HTML
                
            </tr>
    </tbody>
    </table>
HTML;
}

?>






<form action="save.php" method="POST">
            <fieldset class="form-section">
                <legend>Info</legend>
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="basic_info[nickname]">
                </div>
                
                <div class="form-group">
                    <label for="age">Age</label>
                    <input type="number" id="age" name="basic_info[age]" min="18">
                </div>

                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select id="gender" name="basic_info[gender]">
                        <option value="" selected>Not specified</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                        <option value="non-binary">Non-binary</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Genitals</label>
                    
                    <div class="radio-group-horizontal">
                        
                        <div class="radio-item">
                            <input type="radio" id="genitals_penis" name="basic_info[genitals]" value="penis">
                            <label for="genitals_penis">Penis</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="genitals_vagina" name="basic_info[genitals]" value="vagina">
                            <label for="genitals_vagina">Vagina</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="genitals_both" name="basic_info[genitals]" value="both">
                            <label for="genitals_both">Both</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="genitals_unspecified" name="basic_info[genitals]" value="" checked>
                            <label for="genitals_unspecified">Not specified</label>
                        </div>

                    </div>
                </div>
                
                <div class="form-group">
                        <label for="boob_size">Boob size</label>
                        <select id="boob_size" name="basic_info[boob_size]">
                            <option value="none" selected>None</option>
                            <option value="a">A</option>
                            <option value="b">B</option>
                            <option value="c">C</option>
                            <option value="d">D</option>
                            <option value="dd">DD</option>
                            <option value="other">Other</option>
                        </select>
                </div>

                <div class="form-group">
                    <label for="orientation">Orientation</label>
                    <select id="orientation" name="basic_info[orientation]">
                        <option value="" selected>Not specified</option>
                        <option value="female">Heterosexual</option>
                        <option value="male">Homosexual</option>
                        <option value="non-binary">Bisexual</option>
                    </select>
                </div>

                
                <div class="form-group">
                    <label for="body_count">Body count</label>
                    <select id="body_count" name="basic_info[body_count]">
                        <option value="none" selected>Not specified</option>
                        <option value="0">0</option>
                        <option value="1-5">1–5</option>
                        <option value="6-10">6–10</option>
                        <option value="11-20">11–20</option>
                        <option value="21-50">21–50</option>
                        <option value="50+">50+</option>
                    </select>
                </div>


                <div class="form-group">
                    <label for="notes">Notes</label>
                    <textarea id="notes" name="basic_info[notes]" placeholder="Do you want to specify something or is something missing? Write it here!"></textarea>
                </div>
            </fieldset>        

            








            <fieldset class="form-section">
                <legend>Preferences</legend>

                <div class="table-wrapper">
                    <h2>Body</h2>
                    <?php renderGroup($body); ?>
                    
                </div>

                <div class="table-wrapper">
                    <h2>Clothing</h2>
                    <?php renderGroupMulti($clothing, "me", "partner"); ?>
                    
                </div>

                <div class="table-wrapper">
                    <h2>Positions</h2>
                    <?php renderGroupMulti($positions, "giving", "recieving"); ?>
                    
                </div>
                

            </fieldset>

            






            <fieldset class="form-section">
                <legend>Settings</legend>

                <div class="form-group">
                    <label for="password">Edit password</label>
                    <input type="password" id="password" name="edit_password" required>
                    <div class="form-help-text">You will need this password for any future changes. Keep it safe!</div>
                </div>
                
                <div class="form-group">
                    <label>Link</label>
                    
                    <div class="radio-group-horizontal">
                        
                        <div class="radio-item">
                            <input type="radio" id="url_random" name="url_mode" value="random" checked>
                            <label for="url_random">Random</label>
                        </div>

                        <div class="radio-item">
                            <input type="radio" id="url_custom" name="url_mode" value="custom">
                            <label for="url_custom">Custom</label>
                        </div>

                    </div>
                </div>
                
                <div class="form-group" id="custom-slug-group">

                    <div class="input-group">
                        <span class="input-group-prefix">kinklist.teres4.win/</span>
                        
                        <input type="text" id="custom_slug" name="custom_slug" pattern="[a-zA-Z0-9-]+" placeholder="my-list">
                    </div>

                    <div class="form-help-text">Povolena jsou pouze písmena, čísla a pomlčky.</div>
                </div>

            </fieldset>

            <button type="submit" class="submit-button">Save</button>
            
        </form>








    
 
<!-- 


<table class="preference-table">
        <thead>
            <tr>
                <th></th> <th>Partner</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Skinny</td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Chubby</td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Fit</td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>Muscular</td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    Small Breasts
                    <span class="sub-text">A-B Cups</span>
                </td>
                <td>
                    <div class="dots-container">
                        <span class="dot dot-not-entered-light"></span>
                        <span class="dot dot-curious-light"></span>
                        <span class="dot dot-favorite-light"></span>
                        <span class="dot dot-like-light"></span>
                        <span class="dot dot-indifferent-light"></span>
                        <span class="dot dot-maybe-light"></span>
                        <span class="dot dot-limit-light"></span>
                    </div>
                </td>
            </tr>
        </tbody>
    </table>  -->