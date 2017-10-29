<?php
declare(strict_types=1);
// This is the file where you can keep all your data such as articles and
// authors.

$authors = [

  'Neo' =>
  [
    'name' => 'Neo',
    'fullName' => 'Keanu Reeves',
    'id' => 1,
  ],

  'Morpheus' =>
  [
    'name' => 'Morpheus',
    'fullName' => 'Laurence Fishburne',
    'id' => 2,],

  'Trinity' =>
  [
    'name' => 'Trinity',
    'fullName' => 'Carrie-Anne Moss',
    'id' => 3,
  ],

  'Agent Smith' =>
  [
    'name' => 'Agent Smith',
    'fullName' => 'Hugo Weaving',
    'id' => 4,
  ],

  'Cypher' =>
  [
    'name' => 'Cypher',
    'fullName' => 'Joe Pantoliano',
    'id' => 5,
  ],

];


$posts = [

  [
    'title' => 'Take the pill',
    'author' => $authors['Morpheus']['name'],
    'avatar' => '<img src="../img/morpheus.jpg">',
    'content' => "This is your last chance. After this, there is no turning back. You take the blue pill - the story ends, you wake up in your bed and believe whatever you want to believe. You take the red pill - you stay in Wonderland and I show you how deep the rabbit-hole goes.",
    'date' => '2017-05-26',
    'likes' => 15,
  ],

  [
    'title' => 'It is all around us',
    'author' => $authors['Morpheus']['name'],
    'avatar' => '<img src="../img/morpheus.jpg">',
    'content' => "The Matrix is everywhere. It is all around us. Even now, in this very room. You can see it when you look out your window or when you turn on your television. You can feel it when you go to work... when you go to church... when you pay your taxes. It is the world that has been pulled over your eyes to blind you from the truth.",
    'date' => '2017-12-20',
    'likes' => 15,
  ],

  [
    'title' => 'WE ARE THE CURE',
    'author' => $authors['Agent Smith']['name'],
    'avatar' => '<img src="../img/smith.jpg">',
    'content' => "I'd like to share a revelation that I've had during my time here. It came to me when I tried to classify your species and I realized that you're not actually mammals. Every mammal on this planet instinctively develops a natural equilibrium with the surrounding environment but you humans do not. You move to an area and you multiply and multiply until every natural resource is consumed and the only way you can survive is to spread to another area. There is another organism on this planet that follows the same pattern. Do you know what it is? A virus. Human beings are a disease, a cancer of this planet. You're a plague and we are the cure.",
    'date' => '2017-03-04',
    'likes' => 10,
  ],

  [
    'title' => 'a perfect world',
    'author' => $authors['Agent Smith']['name'],
    'avatar' => '<img src="../img/smith.jpg">',
    'content' => "Did you know that the first Matrix was designed to be a perfect human world? Where none suffered, where everyone would be happy. It was a disaster. No one would accept the program. Entire crops were lost. Some believed we lacked the programming language to describe your perfect world. But I believe that, as a species, human beings define their reality through suffering and misery. The perfect world was a dream that your primitive cerebrum kept trying to wake up from. Which is why the Matrix was redesigned to this: the peak of your civilization.",
    'date' => '2017-07-19',
    'likes' => 10,
  ],

  [
    'title' => 'THE CHOICE',
    'author' => $authors['Neo']['id'],
    'avatar' => '<img src="../img/neo.png">',
    'content' => "I know you're out there. I can feel you now. I know that you're afraid... you're afraid of us. You're afraid of change. I don't know the future. I didn't come here to tell you how this is going to end. I came here to tell you how it's going to begin. I'm going to hang up this phone, and then I'm going to show these people what you don't want them to see. I'm going to show them a world without you. A world without rules and controls, without borders or boundaries. A world where anything is possible. Where we go from there is a choice I leave to you.",
    'date' => '2017-09-12',
    'likes' => 20,
  ],

  [
    'title' => 'What is the matrix?',
    'author' => $authors['Trinity']['name'],
    'avatar' => '<img src="../img/trinity.png">',
    'content' => "I know why you're here, Neo. I know what you've been doing. I know why you hardly sleep, why you live alone, and why night after night, you sit at your computer. You're looking for him. I know, because I was once looking for the same thing. And when he found me, he told me I wasn't really looking for him. I was looking for an answer. It's the question that drives us, Neo. It's the question that brought you here. You know the question, just as I did.",
    'date' => '2017-08-28',
    'likes' => 20,
  ],

  [
    'title' => "I'm not afraid anymore",
    'author' => $authors['Trinity']['name'],
    'avatar' => '<img src="../img/trinity.png">',
    'content' => "Neo, I'm not afraid anymore. The Oracle told me that I would fall in love with a man. And that man, the man that I loved would be the One. So you see, you can't be dead. You can't be, because I love you. You hear me? I love you.",
    'date' => '2017-06-09',
    'likes' => 20,
  ],

  [
    'title' => "The messenger",
    'author' => $authors['Cypher']['name'],
    'avatar' => '<img src="../img/cypher.png">',
    'content' => "Don't hate me, Trinity: I'm just a messenger. And right now, I'm gonna prove it to you. If Morpheus was right, then there's no way I can pull this plug. I mean, if Neo's the One, then there'd have to be some kind of miracle to stop me. I mean how can he be the One if he's dead? You never did answer me before, if you bought into Morpheus's bullshit. All I want is a little yes or a no. Look into his eyes, those big pretty eyes. And tell me: Yes or no.",
    'date' => '2017-10-02',
    'likes' => 20,
  ],

  [
    'title' => "Want a drink?",
    'author' => $authors['Cypher']['name'],
    'avatar' => '<img src="../img/cypher.png">',
    'content' => "...there's way too much information to decode the Matrix. You get used to it, though. Your brain does the translating. I don't even see the code. All I see is blonde, brunette, redhead. Hey uh, you want a drink?",
    'date' => '2017-03-17',
    'likes' => 20,
  ]

];
