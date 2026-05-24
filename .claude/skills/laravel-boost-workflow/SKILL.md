# Laravel Boost Workflow Skill

## Purpose

Use this skill to guide Claude when working with Laravel Boost inside the Claude VS Code Extension.

## Main Rule

Use Laravel Boost before making assumptions about the project.

## Before Coding

Inspect:

- Laravel version
- Routes
- Middleware
- Blade layout files
- Existing components
- Existing SCSS/CSS setup
- Vite config
- Bootstrap installation
- JavaScript entry files
- Existing localization files
- Existing public assets
- Existing naming conventions

## Do Not Assume

Do not assume:

- The project has Bootstrap installed
- The project uses SCSS already
- The project has localization configured
- The project has a specific folder structure
- The project has existing components
- The project has a contact form backend

Inspect first.

## Implementation Flow

1. Inspect project structure.
2. Identify current frontend asset pipeline.
3. Identify current routes and layout files.
4. Plan changes.
5. Create or update localization setup.
6. Create or update Blade layout.
7. Create components.
8. Create pages/sections.
9. Add SCSS structure.
10. Add animations JS.
11. Add SEO metadata.
12. Test routes.
13. Test asset build.
14. Summarize changes.

## Laravel 13 Best Practices

Follow current Laravel conventions.

Prefer:

- Route groups for locale prefixes
- Middleware for locale handling
- Blade components for repeated UI
- Translation files for visible text
- Vite for assets
- Semantic HTML
- Named routes
- Controller or FormRequest for contact form if backend handling is implemented

## Safety Rules

- Do not delete existing app logic.
- Do not overwrite unrelated files.
- Do not break existing auth or app routes.
- Do not remove existing packages.
- Do not introduce heavy dependencies.
- Do not hardcode visible content in Blade.

## Useful Validation Questions for Claude Internally

Before editing, answer:

- Where is the main layout?
- Where are assets compiled from?
- Does Bootstrap already exist?
- Does SCSS already exist?
- How are routes currently organized?
- Is localization already configured?
- Where should public website routes live?
- Are there existing images/screenshots to use?

## After Coding Summary

Claude should report:

- Files created
- Files changed
- Routes added
- Components added
- Translation files added
- SCSS files added
- JS animation files added
- How to run Vite
- How to test `/ar` and `/en`
- Any placeholders that need real images/contact info
