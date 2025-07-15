# Planetia 

The once proud races now live scattered across the universe answering to no one and fighting even amongst themselves... Temporary alliances are formed to prey on others and capture as many resources as possible. Greed and envy dominate now.

uedf - odonata - tirynius - syitorian

---

Planetia ([/pləˈniːʃiə/](https://ipa-reader.com/?text=pl%C9%99%CB%88ni%CB%90%CA%83i%C9%99])) is a text-based mmorpg browser game that uses "ticks" to advance the game logic. A tick is the end of an arbitrary interval during which you can do many actions, however these actions are only carried out when the interval passes. Many actions are notified immediately (for example an attack on a player will alert him instantaneously), but can be cancelled before the tick occurs without consequences (other than spooking the player you (didn't) attack(ed)). "On the tick" all actions (battles, researches, constructions, travel, ...) will be calculated and immediately reflect on the game. 

Players are shuffled into galaxies, which are in turn part of a cluster, and are assigned coordinates based on their cluster, galaxy and planet number within the galaxy. A galaxy can have an elected Galactic Commander, who chooses his Minister of War, Minister of Communications and Minister of Development. Besides these local politics, a player can also join an Alliance across the universe.

The purpose of the game is to be the planet, galaxy and/or alliance with the highest score. Points are primarily calculated based on your fleet, built by spending resources. Resources are gathered by orbitals, which determine the size of your planet. These orbitals can be acquired via scans, or more interestingly by stealing them from other planets during a battle.

More information can be obtained by studying the old manual on the internet archive:   
[https://web.archive.org/web/20080331101520/http://support.planetia.net:80/man/index.html](https://web.archive.org/web/20080331101520/http://support.planetia.net:80/man/index.html)

Another great resource is this post by **D'Juhn Keep** on the [ttlg.com](https://www.ttlg.com/) forums.  
[https://www.ttlg.com/forums/showthread.php?t=100567&p=1340873&viewfull=1#post1340873](https://www.ttlg.com/forums/showthread.php?t=100567&p=1340873&viewfull=1#post1340873)

#### [https://planetia.net/](https://planetia.net/)

---

## The Plan

1. Fleshing out the UI using Twig (HTML) and TailwindCSS to mimic the Planetia manual from 2005
2. Adding the logic to the gamepages, based on calculators from the time, filling the gaps as we go
3. Mobile friendly UI

## Requirements

This project uses the following building blocks:

- PHP 8.4.10
- Symfony 7.3.1
- TailwindCSS v4
- Twig 

## Running this development version

1. Clone the repository:
   ```bash
   git clone https://github.com/InFerYes/planetia.git
   ```
2. Navigate to the project directory:
   ```bash
   cd planetia
   ```
3. Install the required dependencies:
   ```bash
   composer install
   ```
4. Run locally:
   ```bash
   symfony serve
   ```
4. (Optionally) Check the recipes used (or to be used) in this project:
   ```bash
   composer recipes
   ```
   
Any changes in the twig templates or tailwind classes will reflect immediately after saving (check `.symfony.local.yaml`).

## Contributing

1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature/YourFeature
   ```
3. Make your changes and commit them:
   ```bash
   git commit -m "Add some feature"
   ```
4. Push to the branch:
   ```bash
   git push origin feature/YourFeature
   ```
5. Open a pull request.

## License

This project is licensed under the [EUPL 1.2](COPYING) - see the [COPYING](COPYING) file for details.

## Contact

Author:  [!nFerNo_](https://github.com/InFerYes)

Project Link: [https://github.com/InFerYes/planetia](https://github.com/InFerYes/planetia)