<!-- encryption-description.html.php -->
<?php 
    $disclaimer_text = "w3bbie is a lot of things. we're all here to build and learn as a community. if you're a visual creator. channel is for all coders, hackers, and developers. if you’re a trader we have bots that will give you charts. promote anything you want. play games against our bot & you can use your earnings to buy prizes. show your nfts off. there are private channels that you will need to own certain nfts to access. ask a mod if interested. we keep it very chill here. dont be an asshole. dont be racist. dont be sexist. no spamming. shilling is ok, but make sure you're interacting with the community more than you're shilling.";
?>
<div class='encryption'>
    <div class = 'disclaimer-or-long-description-text'>
        <!-- <p class='disclaimer-pre-text'>:rabbitprimer:</p> -->
        <p class='disclaimer-text'><?=$disclaimer_text?></p>
    </div>
</div>
<script>
    let coded_text              =   '';
    const random_numbers        =   generatePrimeNumberSet(32);
    const disclaimer_div        =   document.querySelector('.disclaimer-or-long-description-text');
    const disclaimer_text       =   document.querySelector('.disclaimer-text');
    const original_text         =   disclaimer_text.innerHTML;
    let original_text_as_array  =   original_text.split(' ');
    original_text_as_array      =   getCharCodes(original_text_as_array);
    coded_text                  =   transformStringsIntoPrimeNumbers(original_text_as_array);
    disclaimer_text.innerHTML   =   '';
    coded_text.forEach(element=>{
        disclaimer_text.innerHTML += `<span id='encoded-text'>${element.prime_hash}</span>`;
    });
    disclaimer_div.addEventListener('mousemove', ()=>{
        console.log('new codes here!');
    });
    function getCharCodes(elements){
        char_code_array = [];
        elements.forEach(element=>{
            for (let index in element)
                char_code_array.push(element.charCodeAt(index));
        });
        return char_code_array;
    }
    function generatePrimeNumberSet(n_size){
        // console.log('generating prime numbers from', n_size, 'random options.');
        const numbers = [];
        for (let i = 0; i < n_size; i++){
            random_int = Math.ceil(Math.random()*100_000);
            if (isThisNumberPrime(random_int))
                numbers.push(random_int);
        }
        return numbers;
    }
    function isThisNumberPrime(n){
        if(n <= 1)
            return false;
        else {
            for (let i = 2; i < n; i++)
                if (n % i === 0)
                    return false;
            return true;
        }
    }
    
    function transformStringsIntoPrimeNumbers(char_code_array){
        transformations = [];
        char_code_array.forEach( char_code=> {
            prime_number = random_numbers[Math.floor(Math.random()*random_numbers.length)];
            transcoded = char_code * prime_number;
            // console.log(transcoded, 'TRANSCODED')
            temp_object = { prime_hash: transcoded, prime_link: prime_number };
            transformations.push(temp_object);
        });
        return transformations;
    }
</script>