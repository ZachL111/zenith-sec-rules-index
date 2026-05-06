# zenith-sec-rules-index

`zenith-sec-rules-index` keeps a focused PHP implementation around security tooling. The project goal is to implement a PHP security tooling project for rules resource planning, using capacity fixtures and allocation and spill reports.

## Reason For The Project

I want this repository to be useful as a quick reading exercise: fixtures first, implementation second, verifier last.

## Zenith Sec Rules Index Review Notes

The first comparison I would make is `trust boundary` against `trust boundary` because it shows where the rule is most opinionated.

## What It Does

- `fixtures/domain_review.csv` adds cases for trust boundary and claim drift.
- `metadata/domain-review.json` records the same cases in structured form.
- `config/review-profile.json` captures the read order and the two review questions.
- `examples/zenith-sec-rules-walkthrough.md` walks through the case spread.
- The PHP code includes a review path for `trust boundary` and `trust boundary`.
- `docs/field-notes.md` explains the strongest and weakest cases.

## How It Is Put Together

The fixture data drives the tests. The code stays thin, while `metadata/domain-review.json` and `config/review-profile.json` explain what each case is meant to protect.

The added PHP path is deliberately direct, with fixtures doing most of the explaining.

## Run It

```powershell
powershell -NoProfile -ExecutionPolicy Bypass -File scripts/verify.ps1
```

## Check It

The verifier is intentionally local. It should fail if the fixture score math, lane assignment, or language-specific test drifts.

## Boundaries

The repository is intentionally scoped to local checks. I would expand it by adding adversarial fixtures before adding features.
