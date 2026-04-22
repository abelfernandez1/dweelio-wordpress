# Dweelio Embed WordPress Plugin

A simple WordPress plugin to embed Dweelio content using a Gutenberg block.

## What is Dweelio?

Dweelio is a comprehensive property rental management system designed for property owners and managers. It provides a complete solution for managing rental properties, handling bookings, setting availability and pricing, and integrating booking functionality into existing websites. This plugin allows you to embed Dweelio booking widgets directly into your WordPress site.

## Development Setup

To set up the development environment and build the plugin, follow these steps:

1. Clone the repository
2. Install dependencies:
   ```
   npm install
   ```
3. Build the plugin:
   ```
   npm run build
   ```

## Usage

1. Install and activate the plugin in your WordPress site
2. Add the "Dweelio Embed" block to your post or page
3. Enter your Dweelio UUID in the block settings
4. Adjust the height as needed
5. Save and publish your content

## Scripts

- `npm run build` - Build the plugin for production
- `npm run start` - Start the development server with hot reloading
- `npm run format` - Format code using WordPress coding standards
- `npm run lint:css` - Lint CSS/SCSS files
- `npm run lint:js` - Lint JavaScript files
- `npm run zip` - Create a zip file of the plugin for WordPress installation (outputs to dist/dweelio-embed.zip)

## Requirements

- WordPress 5.8 or higher
- Node.js 14 or higher
- npm 6 or higher
