# KinkyMe

A lightweight PHP + SQLite web app for creating, sharing, and editing personal kink lists.

## Features

- Profile info & categorized kink preferences (`Body`, `Clothing`, `Positions`, `General`, `Penis oriented`, `Vagina oriented`, `Ass oriented`, `Toys`, `Degradation`, `Domination`, `CNC`)
- `Tried` checkbox + 7-level rating scale (`Curious`, `Favorite`, `Like`, `Indifferent`, `Maybe`, `Limit`, `Not entered`)
- Custom slug (`/my-list`) or randomly generated link
- Password-protected editing (`/<slug>/edit`) including changing the list link or password
- Responsive layout optimized for both desktop and mobile
- Zero external database container required (uses SQLite via PDO)

## Running with Docker (GitHub Package)

1. Copy the example compose file:
   ```bash
   cp compose.example.yaml compose.yaml
   ```
2. Start the application using the prebuilt `ghcr.io/foxxoowo/kinklist:latest` image:
   ```bash
   docker compose up -d
   ```
3. Or build locally from source:
   ```bash
   docker compose up -d --build
   ```
4. Open `http://localhost:8080` in your browser.

Database data is persisted in `/var/www/data/kinklist.sqlite` via the mounted Docker volume.
